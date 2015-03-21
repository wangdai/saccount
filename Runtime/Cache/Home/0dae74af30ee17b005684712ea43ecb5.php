<?php if (!defined('THINK_PATH')) exit(); if($type == 0): ?><table>
		<tr>
			<th>字段</th>
			<th>值</th>
		</tr>
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
			<td><?php echo $data["status"]?"挂失":"正常";?></td>
		</tr>
	</table>
	<form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>">
		<input name="op" value="-1" hidden>
		<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
		<input type="submit" value="销户">
	</form>

	<?php if($data["status"] == 0): ?><form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>">
			<input name="op" value="1" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="挂失">
		</form>
	<?php elseif($data["status"] == 1): ?>
		<form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>">
			<input name="op" value="0" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="解挂">
		</form>
		<form method="post" action="<?php echo U('/individual/id/'.$data['no']);?>">
			<input name="op" value="2" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="重新办理">
		</form><?php endif; ?>
<?php elseif($type == 1): ?>
	<table>
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
			<td><?php echo $data["status"]?"挂失":"正常";?></td>
		</tr>
	</table>
		<form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>">
		<input name="op" value="-1" hidden>
		<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
		<input type="submit" value="销户">
	</form>

	<?php if($data["status"] == 0): ?><form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>">
			<input name="op" value="1" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="挂失">
		</form>
	<?php elseif($data["status"] == 1): ?>
		<form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>">
			<input name="op" value="0" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="解挂">
		</form>
		<form method="post" action="<?php echo U('/organization/id/'.$data['no']);?>">
			<input name="op" value="2" hidden>
			<input name="no" value="<?php echo ($data["no"]); ?>" hidden>
			<input type="submit" value="重新办理">
		</form><?php endif; endif; ?>