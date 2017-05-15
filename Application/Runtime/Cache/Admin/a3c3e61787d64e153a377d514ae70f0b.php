<?php if (!defined('THINK_PATH')) exit();?>		<!-- Page Head -->
			<h2>欢迎管理员 Tony</h2>
			<p id="page-intro">管理商品类别</p>
			
			<div class="clear"></div> <!-- End .clear -->
			<a href="?m=Admin&c=Index&goto=typeAdd" class="button">添加类别</a><br /><br />
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>商品类别管理</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<table>
							
							<thead>
								<tr>
								   <th>ID</th>
								   <th>类别名称</th>
								   <th>父类</th>
								   <th>操作</th>
								</tr>
							</thead>
						 
							<tbody>
								<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
										<td><?php echo ($vo["id"]); ?></td>
										<td><?php echo ($vo["name"]); ?></td>
										<td><?php echo ($vo["p_id"]); ?></td>
										<td>
										<a href="#" title="Delete"><img src="Public/resources/images/icons/cross.png" alt="下架" /></a> 
										<a href="#" title="Edit"><img src="Public/resources/images/icons/pencil.png" alt="修改" /></a>
									</td>
									</tr><?php endforeach; endif; ?>

								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					    
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->