<?php if (!defined('THINK_PATH')) exit();?><pre>object(Think\Model)#6 (20) {
  [&quot;db&quot;:protected] =&gt; object(Think\Db\Driver\Mysql)#8 (18) {
    [&quot;dbType&quot;:protected] =&gt; NULL
    [&quot;autoFree&quot;:protected] =&gt; bool(false)
    [&quot;model&quot;:protected] =&gt; string(7) &quot;_think_&quot;
    [&quot;pconnect&quot;:protected] =&gt; bool(false)
    [&quot;queryStr&quot;:protected] =&gt; string(34) &quot;SHOW COLUMNS FROM `saccount_admin`&quot;
    [&quot;modelSql&quot;:protected] =&gt; array(1) {
      [&quot;Admin&quot;] =&gt; string(34) &quot;SHOW COLUMNS FROM `saccount_admin`&quot;
    }
    [&quot;lastInsID&quot;:protected] =&gt; NULL
    [&quot;numRows&quot;:protected] =&gt; int(6)
    [&quot;numCols&quot;:protected] =&gt; int(0)
    [&quot;transTimes&quot;:protected] =&gt; int(0)
    [&quot;error&quot;:protected] =&gt; string(0) &quot;&quot;
    [&quot;linkID&quot;:protected] =&gt; array(1) {
      [0] =&gt; resource(1) of type (mysql link)
    }
    [&quot;_linkID&quot;:protected] =&gt; resource(1) of type (mysql link)
    [&quot;queryID&quot;:protected] =&gt; resource(2) of type (mysql result)
    [&quot;connected&quot;:protected] =&gt; bool(true)
    [&quot;comparison&quot;:protected] =&gt; array(10) {
      [&quot;eq&quot;] =&gt; string(1) &quot;=&quot;
      [&quot;neq&quot;] =&gt; string(2) &quot;&lt;&gt;&quot;
      [&quot;gt&quot;] =&gt; string(1) &quot;&gt;&quot;
      [&quot;egt&quot;] =&gt; string(2) &quot;&gt;=&quot;
      [&quot;lt&quot;] =&gt; string(1) &quot;&lt;&quot;
      [&quot;elt&quot;] =&gt; string(2) &quot;&lt;=&quot;
      [&quot;notlike&quot;] =&gt; string(8) &quot;NOT LIKE&quot;
      [&quot;like&quot;] =&gt; string(4) &quot;LIKE&quot;
      [&quot;in&quot;] =&gt; string(2) &quot;IN&quot;
      [&quot;notin&quot;] =&gt; string(6) &quot;NOT IN&quot;
    }
    [&quot;selectSql&quot;:protected] =&gt; string(96) &quot;SELECT%DISTINCT% %FIELD% FROM %TABLE%%JOIN%%WHERE%%GROUP%%HAVING%%ORDER%%LIMIT% %UNION%%COMMENT%&quot;
    [&quot;bind&quot;:protected] =&gt; array(0) {
    }
  }
  [&quot;pk&quot;:protected] =&gt; string(2) &quot;id&quot;
  [&quot;autoinc&quot;:protected] =&gt; bool(true)
  [&quot;tablePrefix&quot;:protected] =&gt; string(9) &quot;saccount_&quot;
  [&quot;name&quot;:protected] =&gt; string(5) &quot;Admin&quot;
  [&quot;dbName&quot;:protected] =&gt; string(0) &quot;&quot;
  [&quot;connection&quot;:protected] =&gt; string(0) &quot;&quot;
  [&quot;tableName&quot;:protected] =&gt; string(0) &quot;&quot;
  [&quot;trueTableName&quot;:protected] =&gt; string(14) &quot;saccount_admin&quot;
  [&quot;error&quot;:protected] =&gt; string(21) &quot;非法数据对象！&quot;
  [&quot;fields&quot;:protected] =&gt; array(8) {
    [0] =&gt; string(2) &quot;id&quot;
    [1] =&gt; string(11) &quot;create_time&quot;
    [2] =&gt; string(4) &quot;user&quot;
    [3] =&gt; string(6) &quot;passwd&quot;
    [4] =&gt; string(4) &quot;name&quot;
    [5] =&gt; string(6) &quot;mobile&quot;
    [&quot;_pk&quot;] =&gt; string(2) &quot;id&quot;
    [&quot;_type&quot;] =&gt; array(6) {
      [&quot;id&quot;] =&gt; string(7) &quot;int(16)&quot;
      [&quot;create_time&quot;] =&gt; string(9) &quot;timestamp&quot;
      [&quot;user&quot;] =&gt; string(11) &quot;varchar(20)&quot;
      [&quot;passwd&quot;] =&gt; string(8) &quot;char(40)&quot;
      [&quot;name&quot;] =&gt; string(11) &quot;varchar(20)&quot;
      [&quot;mobile&quot;] =&gt; string(11) &quot;varchar(20)&quot;
    }
  }
  [&quot;data&quot;:protected] =&gt; array(0) {
  }
  [&quot;options&quot;:protected] =&gt; array(0) {
  }
  [&quot;_validate&quot;:protected] =&gt; array(0) {
  }
  [&quot;_auto&quot;:protected] =&gt; array(0) {
  }
  [&quot;_map&quot;:protected] =&gt; array(0) {
  }
  [&quot;_scope&quot;:protected] =&gt; array(0) {
  }
  [&quot;autoCheckFields&quot;:protected] =&gt; bool(true)
  [&quot;patchValidate&quot;:protected] =&gt; bool(false)
  [&quot;methods&quot;:protected] =&gt; array(11) {
    [0] =&gt; string(5) &quot;order&quot;
    [1] =&gt; string(5) &quot;alias&quot;
    [2] =&gt; string(6) &quot;having&quot;
    [3] =&gt; string(5) &quot;group&quot;
    [4] =&gt; string(4) &quot;lock&quot;
    [5] =&gt; string(8) &quot;distinct&quot;
    [6] =&gt; string(4) &quot;auto&quot;
    [7] =&gt; string(6) &quot;filter&quot;
    [8] =&gt; string(8) &quot;validate&quot;
    [9] =&gt; string(6) &quot;result&quot;
    [10] =&gt; string(5) &quot;token&quot;
  }
}
</pre>