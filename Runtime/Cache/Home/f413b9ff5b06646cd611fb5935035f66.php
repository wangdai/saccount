<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
 <head> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <title>Stock Trade System--Administor</title> 
  <!-- Bootstrap --> 
  <!-- <link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
    <script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/js/bootstrap.min.js" type="text/javascript"></script> --> 
  <script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js" type="text/javascript"></script> 
  <script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/js/bootstrap.min.js" type="text/javascript"></script> 
  <!-- Flat UI --> 
  <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version." /> 
  <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0" /> 
  <!-- Loading Bootstrap --> 
  <link href="../../Home/View/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet" /> 
  <!-- Loading Flat UI --> 
  <link href="../../Home/View/FlatUI/css/flat-ui.css" rel="stylesheet" /> 
  <link href="../../Home/View/FlatUI/css/demo.css" rel="stylesheet" /> 
  <!-- Custom styles for this template --> 
  <link href="../../Home/View/customer.css" rel="stylesheet" /> 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
 </head> 
 <body> 
  <div class="container"> 
   <div class="page-header"> 
    <!-- <div class="row"> --> 
    <div class="span4">
     <h1>股票交易系统</h1>
    </div> 
   </div> 
<div class="span8"><p class="pull-right">
  <!-- <input type="text" class="form-control" placeholder=<?php echo ($user); ?> /> -->
  <button class="btn btn-inverse"  disabled="disabled" color="black"><?php echo ($user); ?></button>
  <!-- <?php echo ($user); ?>  -->
  <button class="btn btn-info" onclick="window.location.href='<?php echo U('/logout');?>'" type="button">注销</button> </p></div>
   <!-- </div> --> 
   <div class="tabbable tabs-left"> 
    <ul class="nav nav-tabs"> 
     <li><a href="<?php echo U('/welcome');?>">主页</a></li> 
     <li><a href="<?php echo U('/individual/validate');?>">创建个人账户</a></li> 
     <li><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li> 
     <li class="active"><a href="<?php echo U('/search');?>">搜索账户</a></li> 
    </ul> 
    <div class="tab-pane active" id="tabsearch"> 
     <fieldset> 
      <?php if($type == 0): ?><table class="table table-condensed table-striped"> 
        <tbody>
         <tr> 
          <td>个人账户号</td> 
          <td><?php echo ($data["no"]); ?></td> 
         </tr> 
         <tr> 
          <td>创建时间</td> 
          <td><?php echo ($data["create_time"]); ?></td> 
         </tr> 
         <tr> 
          <td>姓名</td> 
          <td><?php echo ($data["name"]); ?></td> 
         </tr> 
         <tr> 
          <td>性别</td> 
          <td><?php echo ($data["gender"]); ?></td> 
         </tr> 
         <tr> 
          <td>身份证号</td> 
          <td><?php echo ($data["id_no"]); ?></td> 
         </tr> 
         <tr> 
          <td>手机号</td> 
          <td><?php echo ($data["mobile"]); ?></td> 
         </tr> 
         <tr> 
          <td>家庭地址</td> 
          <td><?php echo ($data["address"]); ?></td> 
         </tr> 
         <tr> 
          <td>职业</td> 
          <td><?php echo ($data["occupation"]); ?></td> 
         </tr> 
         <tr> 
          <td>单位</td> 
          <td><?php echo ($data["company"]); ?></td> 
         </tr> 
         <tr> 
          <td>教育程度</td> 
          <td><?php echo ($data["education"]); ?></td> 
         </tr> 
         <tr> 
          <td>代办人身份证号</td> 
          <td><?php echo ($data["agent_id_no"]); ?></td> 
         </tr> 
         <tr> 
          <td>资金账户</td> 
          <td><?php echo ($data["capital_account"]); ?></td> 
         </tr> 
         <tr> 
          <td>状态</td> 
          <td>
           <!--?php echo $data["status"]?"挂失":"正常";?--></td> 
         </tr> 
        </tbody>
       </table> 
       <table style="margin-bottom: 50px;">
       <tbody>
       <tr>
       <th>
       <form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>"> 
        <input name="op" value="-1" hidden="" /> 
        <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
        <input class="btn btn-danger" type="submit" value="销户" /> 
       </form>
       </th> 
       <?php if($data["status"] == 0): ?><th> 
        <form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="1" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-warning" type="submit" value="挂失" /> 
        </form>
        </th> 
        <?php elseif($data["status"] == 1): ?>
        <th> 
        <form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="0" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-success" type="submit" value="解挂" /> 
        </form>
        </th>
        <th> 
        <form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="2" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-inverse" type="submit" value="重新办理" /> 
        </form>
        </th><?php endif; ?>
       </tr>
       </tbody>
       </table> 
       <?php elseif($type == 1): ?> 
       <table class="table table-condensed table-striped"> 
        <tbody>
         <tr> 
          <th>字段</th> 
          <th>值</th> 
         </tr> 
         <tr> 
          <td>法人账户号</td> 
          <td><?php echo ($data["no"]); ?></td> 
         </tr> 
         <tr> 
          <td>创建时间</td> 
          <td><?php echo ($data["create_time"]); ?></td> 
         </tr> 
         <tr> 
          <td>法人注册号</td> 
          <td><?php echo ($data["legal_registration_no"]); ?></td> 
         </tr> 
         <tr> 
          <td>营业执照号</td> 
          <td><?php echo ($data["business_license_no"]); ?></td> 
         </tr> 
         <tr> 
          <td>法人身份证号</td> 
          <td><?php echo ($data["legal_id"]); ?></td> 
         </tr> 
         <tr> 
          <td>法人姓名</td> 
          <td><?php echo ($data["legal_name"]); ?></td> 
         </tr> 
         <tr> 
          <td>法人联系电话</td> 
          <td><?php echo ($data["legal_mobile"]); ?></td> 
         </tr> 
         <tr> 
          <td>法人联系地址</td> 
          <td><?php echo ($data["legal_address"]); ?></td> 
         </tr> 
         <tr> 
          <td>授权人身份证</td> 
          <td><?php echo ($data["authorizee_id"]); ?></td> 
         </tr> 
         <tr> 
          <td>授权人姓名</td> 
          <td><?php echo ($data["authorizee_name"]); ?></td> 
         </tr> 
         <tr> 
          <td>授权人联系电话</td> 
          <td><?php echo ($data["authorizee_mobile"]); ?></td> 
         </tr> 
         <tr> 
          <td>授权人联系地址</td> 
          <td><?php echo ($data["authorizee_address"]); ?></td> 
         </tr> 
         <tr> 
          <td>资金账户</td> 
          <td><?php echo ($data["capital_account"]); ?></td> 
         </tr> 
         <tr> 
          <td>状态</td> 
          <td>
           <!--?php echo $data["status"]?"挂失":"正常";?--></td> 
         </tr> 
        </tbody>
       </table>
              <table style="margin-bottom: 50px;">
       <tbody>
       <tr>
       <th> 
       <form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>"> 
        <input name="op" value="-1" hidden="" /> 
        <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
        <input class="btn btn-danger" type="submit" value="销户" /> 
       </form> 
       </th>
       <?php if($data["status"] == 0): ?><th >
        <form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="1" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-warning" type="submit" value="挂失" /> 
        </form> 
        </th>
        <?php elseif($data["status"] == 1): ?> 
        <th>
        <form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="0" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-success" type="submit" value="解挂" /> 
        </form> 
        </th>
        <th>
        <form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>" style="margin-left: 15px;"> 
         <input name="op" value="2" hidden="" /> 
         <input name="no" value="<?php echo ($data["no"]); ?>" hidden="" /> 
         <input class="btn btn-inverse" type="submit" value="重新办理" /> 
        </form> 
        </th>
        </tr>
        </tbody>
        </table><?php endif; endif; ?> 
     </fieldset>
    </div>  
   </div> 
  </div>  
 </body>
</html>