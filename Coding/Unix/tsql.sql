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
		    
		    select * from CONTACT;