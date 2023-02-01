Convert Legacy Tables
========================

Convert tables to and from single legacy EE3 table structure to EE4 and EE5.
This effectively separates the table data (channel_data) into the newer, separate field tables that are used in EE4+

This may also solve a situation where you may have too many table joins. Converting some of the fields back to lagacy format may solve this issue:

```General error: 1116 Too many tables; MySQL can only use 61 tables in a join```

Note: too many joins is fixed in EE 6.0.1. See:
https://github.com/ExpressionEngine/ExpressionEngine/issues/708


In the case where you may be converting back to legacy tables, you may experience an error with the inserted row size being to large.
Refer to: https://mariadb.com/kb/en/troubleshooting-row-size-too-large-errors-with-innodb/ to troubleshoot this issue.


#### Caution: ####

This process alters the database structure and should be only handled by experienced developer. 
Make sure that you backup the database before converting any fields.

#### Convert Tables: ####

Fields within these tables can be converted:

- Channel Fields (exp_channel_data)
- Category Fields (exp_category_fields_data)
- Member Fields (exp_member_data)


#### Convert Tables Engine Tool: ####

This enables you to convert tables to and from MyISAM and InnoDB.

See: https://docs.expressionengine.com/latest/general/converting-to-innodb.html
