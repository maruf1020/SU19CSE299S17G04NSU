Enum orders_status {
  created
  running
  done
  failure
 }
 
 
 
 Table members {
  id int [primary key]
  nsu_id int [unique]
  depertment_name varchar
  barch int
  full_name varchar
  email varchar [unique]
  mobile_number varchar [unique]
  gender varchar [note: "Only 'male','female','any'"]
  date_of_birth date
  club_name varchar
  facebook_id varchar
  twtter_id varchar
  whatsup_id varchar
}


Table events {
  event_id int [pk]
  ev_title varchar [not null]
  ev_description varchar [not null]
  ev_photo varchar
  ev_publish_date date
  ve_date date
}


Table clubs {
  club_id int [pk]
  club_name varchar [not null]
  club_member_Position int [ref: > members_Positions.members_Position_id]
  club_event int [ref: > events.event_id]
  club_about int [ref: > abouts.about_id]
  club_awards int [ref: > awards.award_id]
}


Table members_Positions{
  members_Position_id int [pk]
  club_president varchar [ref: > presidents.president_id]
  club_vixe_precident int [ref: > vice_presidents.vice_president_id]
  club_genera_secretary int [ref: > general_secretarys.general_secretary_id]
  club_eb int [ref: > eb.eb_id]
  club_treasurer int [ref: > treasurers.treasurer_id]
  club_sub_exicutive int [ref: > Sub_executives.Sub_executive_id]
  club_in_charge int [ref: > in_charges.in_charge_id]
  club_member varchar [ref: > club_members.club_member_id]
}




Table eb{
  eb_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar 
  joining_date date
  
}
 
 
 Table presidents{
  president_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar [unique]
  joining_date date
  
}

 Table vice_presidents{
  vice_president_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar [unique]
  joining_date date
}

 Table general_secretarys{
  general_secretary_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar [unique]
  joining_date date
}

 Table treasurers{
  treasurer_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar
  joining_date date
}

 Table Sub_executives{
  Sub_executive_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar
  joining_date date
}

 Table in_charges{
  in_charge_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar 
  joining_date date
}

Table club_members{
  club_member_id int [pk]
  nsu_id int [ref: > members.nsu_id]
  club_name varchar 
  joining_date date
}

 Table abouts{
  about_id int [pk]
  about_title varchar
  about_description varchar
  
}

 Table awards{
  award_id int [pk]
  award_title varchar
  award_description varchar
  award_photo varchar
}

 Table user_messages{
  user_message_id int [pk]
  user_message_name varchar
  user_message_email varchar [ref: > members.email]
  user_message_description varchar
}

 Table joining_request{
  joining_request_id int [pk]
  id int [ref: > members.nsu_id]
  questions varchar [ref: > joining_quistions.joining_quistion_id]
  result int
  joining_request_date date
  
}

 Table joining_quistions{
  joining_quistion_id int [pk]
  questions_no int
  ans_01 varchar
  ans_02 varchar
  ans_03 varchar
  ans_04 varchar
  ans_05 varchar
}




