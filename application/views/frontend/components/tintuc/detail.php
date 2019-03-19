<section id="content">
	<div class="row wraper">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/news'); ?> 
            </div>
			<div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content" id="list-content">
				<div class="product-wrap" id="info-content">
					<div class="content-ct">
						<div class="entry-title">
							<h3><?php echo $row['title']; ?></h3>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="fa fa-calendar" style="margin-right: 5px"></i><?php echo $row['created']; ?></li>
						</ul>
						<div class="entry-content">
							<p><?php echo $row['fulltext']; ?></p>
						</div><br>
						<p style="text-align: right">Cung cấp bởi:<a href="https://www.facebook.com/hoa.nguyenvan.4" title="hòa nguyễn"> HPU2__VP</a></p>
						<div class="product-comment product-v-desc">
						<h3>Bình luận</h3>
						<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
							<!-- <?php if(!$this->session->userdata('session24hStore')):?>
								<p>Bạn chưa đăng nhập, nhấn vào <a href="dang-nhap"> đây </a> để đăng nhập !</p>
							<?php  else :?>
								<div class="user-comments">
									<form action="#">
										<input type="text" name="content" placeholder="Nhập bình luận">
									</form>
								</div>
							<?php endif;?> -->
							<div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>" data-numposts="5"></div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>