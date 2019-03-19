<?php   
	$hoa = $this->Mcategory->category_where(0);
	$parenthoa="";
	foreach ($hoa as $loan) {
		$parenthoa.="<option value='".$loan['id']."'>".$loan['name']."</option>";
	}
	
?>

<?php echo form_open_multipart('admin/category/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/category/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Thêm danh mục mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/category" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box" id="view">
						<div class="box-body">
							<div class="form-group">
								<label>Tên danh mục <span class = "maudo">(*)</span></label>
								<input type="text" class="form-control" name="name" style="width:50%" placeholder="Tên danh mục">
								<div class="error" id="password_error"><?php echo form_error('name')?></div>
							</div>
							<div class="form-group">
								<label>Danh mục cha</label>
								<select name="parentid" id="parentid" onchange="renderDistrict()" class="form-control" style="width:50%">
									<option value = "0">[--Chọn danh mục--]</option>
									<?php echo $parenthoa;?>
								</select>
							</div>
							<div class="form-group">
								<label>Sắp xếp</label>
								<select name="orders" id="orders" class="form-control" style="width:50%">
									<option value = "">[--Chọn vị trí--]</option>
									<option value="0">Đứng đầu</option>
								</select>
							</div>
							<div class="form-group">
								<label>Trạng thái</label>
								<select name="status" class="form-control" style="width:50%">
									<option value = "">[--Chọn trạng thái--]</option>
									<option value="1">Xuất bản</option>
									<option value="0">Chưa xuất bản</option>
								</select>
							</div>
						</div>
					</div><!-- /.box -->
				</div>
			<!-- /.col -->
		  <!-- /.row -->
		</section>
	</form>
<!-- /.content -->
</div><!-- /.content-wrapper -->
<script>
    function renderDistrict(){
        var provinceid=$("#parentid").val();
        var strurl="<?php echo base_url();?>"+'admin/category/district';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'provinceid': provinceid},
            success: function(data) {
                $('#orders').html(data);
            }
        });
    };
</script>