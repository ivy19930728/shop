<?php if (!defined('THINK_PATH')) exit();?>			<!-- Page Head -->
			<h2>欢迎管理员</h2>
			<p id="page-intro">添加评论</p>
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>添加评论</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>商品名字</label>
										<input class="text-input small-input" type="text" id="small-input" name="g_id" />
								</p>
								
								<p>
									<label>用户</label>
										<input class="text-input small-input" type="text" id="small-input" name="u_id" />
								</p>
								
								<p>
									<label>用户</label>
										<input type = 'radio' name="level" value='A'/>好评
										<input type = 'radio' name = 'level' value = 'B'>中评
										<input type = 'radio' name = 'level' value = 'C'>差评
								</p>
								
								<p>
									<label>评论内容</label>
									<textarea name="content"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="添加" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->