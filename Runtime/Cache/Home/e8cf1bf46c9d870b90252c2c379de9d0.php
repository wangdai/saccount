<?php if (!defined('THINK_PATH')) exit();?><table>
	<tr>
		<th>法人账户号</th>
		<th>法人姓名</th>
		<th>法人身份证号</th>
		<th>账户状态</th>
	</tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		<td><?php echo ($vo["no"]); ?></td>
		<td><?php echo ($vo["legal_name"]); ?></td>
		<td><?php echo ($vo["legal_id"]); ?></td>
		<td><?php echo ($vo["status"]); ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>