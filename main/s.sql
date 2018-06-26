
begin
  select coalesce(sum(cents_loaned - cents_paid),0), coalesce(count(*), 0), coalesce(sum(cents_loaned), 0), coalesce(sum(cents_loaned), 0), min(loan_time) 
  from tbl_loans_new where subscriber_fk = ip_subscriber  into loan_balance, loan_count, loans_total,net_loanstotal,oldest_loan_time;
  --select coalesce(sum(cents_loaned - cents_paid),0), coalesce(sum(cents_loaned), 0) from tbl_loans_new where subscriber_fk = ip_subscriber  into loan_balance, loans_total;
  select count(*), coalesce(sum(request_amount), 0) from tbl_vtop_credit_req_new where subscriber_fk = ip_subscriber
    into queue_count, queue_total;
  max_qualified := coalesce((select coalesce(cents_loanable,0) from tbl_decisioning2 where subscriber_fk = ip_subscriber ),0);
  max_loanable := (
	case when max_qualified = 0 then 0 
	else 
	   case when oldest_loan_time::date < current_date - '14d'::interval then 0 
	else 
	   case when max_qualified - (net_loanstotal + queue_total) <0 then 0 
	    else max_qualified - (net_loanstotal + queue_total) end end end);
  subscriber_flags := (case when loan_count < ((select param_value from tbl_lending_params where param_name = 'MAX LOANS')::integer) then 1 else 0 end);
  current_pin := (loan_count + 1);

  loan_statement := '{}'::json;   
end;