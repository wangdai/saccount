<?php if (!defined('THINK_PATH')) exit(); if($type == 0): ?><table>
		<tr>
			<th>个人账户号</th>
			<th>姓名</th>
			<th>身份证号</th>
			<th>账户状态</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><a href="<?php echo U('/individual/id/'.$vo['no']);?>"><?php echo ($vo["no"]); ?></a></td>
			<td><?php echo ($vo["name"]); ?></td>
			<td><?php echo ($vo["id_no"]); ?></td>
			<td><?php echo $vo["status"]?"挂失":"正常";?></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
<?php elseif($type == 1): ?>
	<table>
		<tr>
			<th>法人账户号</th>
			<th>法人注册号</th>
			<th>法人姓名</th>
			<th>法人身份证号</th>
			<th>账户状态</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><a href="<?php echo U('/organization/id/'.$vo['no']);?>"><?php echo ($vo["no"]); ?></a></td>
			<td><?php echo ($vo["legal_registration_no"]); ?></td>
			<td><?php echo ($vo["legal_name"]); ?></td>
			<td><?php echo ($vo["legal_id"]); ?></td>
			<td><?php echo $vo["status"]?"挂失":"正常";?></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table><?php endif; ?>