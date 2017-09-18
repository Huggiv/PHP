#!/bin/bash
File=Testload.txt

sqlplus -s kthl/kthl@XE <<EOF >{File}
   set feedback off
   set echo off
   set head off
   set serveroutput ON
   set pagesize 0
   set tab off
   set linesize 7000
   set termout off
   set arraysize 5000
   set autocommit on
   set wrap off
   set trimspool on
   set newpage 0
   set markup html off spool off

   WHENEVER SQLERROR EXIT 255
   
   select j_category from jobs;
EOF

for i in $(cat $File); do
    echo "tester: $i"
		
done

cat $File |while read name
do
sqlplus -s kthl/kthl@XE > Test1.log <<EOF1
set verify off 
set heading off 
select * from CONTACT
/
exit
EOF1