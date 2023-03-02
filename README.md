Convert Legacy Tables
========================

Convert ExpressionEngine legacy tables to EE4+ table structure. Tested up to EE7.

This tool enables you to convert data from legacy EE3 single table structure to the newer EE4 - EE7 separate tables.

This effectively separates the table data (channel_data) into the newer, separate field tables structure that is used in EE4+.


#### Converting back to legacy data: ####

You may also convert data back to the legacy table. This may also solve a situation where you may have too many table joins. 
Converting some of the fields back to lagacy format may solve this issue:

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
