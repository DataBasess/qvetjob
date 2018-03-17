

<form role="form"
action="<?php echo base_url('cwcontrol/'.$page.'/insert');?>"
method="post" enctype="multipart/form-data">
<input type="hidden" name="method" value="insert" />


<div class="row">


	<div class="col-lg-12" style="margin-top: 20px;">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('cwcontrol/'.$page);?>">จัดการสไลด์</a></li>
			<li class="active">เพิ่มสไลด์</li>
		</ol>
		<div class="panel panel-default">
			<div class="panel-heading">

				<strong>เพิ่มข้อมูล</strong>


			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">&nbsp;</div>
					<div class="col-lg-6 text-right">
						<button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
					</div>
					<div class="col-lg-12">



							<!--<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label>ไตเติล TH </label> <input type="text"
											class="form-control" name="title_TH">

									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label>ไตเติล EN</label> <input type="text"
											class="form-control" name="title_EN">

									</div>
								</div>
							</div>


							<div class="row">
                            			<div class="col-lg-6">  
                                          <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" class="form-control" name="slide_Url">
                                                
                                            </div>  
                                        </div>
                                    </div>-->




                                    <div class="row">
                                    	<div class="col-lg-12">
                                    		<div class="form-group">
                                    			<label>รูปภาพ ขนาด 1920px x 570px (ใช้สำหรับแสดงบน Desktop Version) </label> <input type="file"
                                    			name="slide_Images" id="Images"
                                    			onchange="readURL(this,'preview')"> <img
                                    			style="display: none;" id="preview" class="img-thumbnail"
                                    			src="" alt="preview" width="400" />


                                    		</div>
                                    	</div>
                                    </div>


<!--
                                    <div class="row">
                                    	<div class="col-lg-12">  
                                    		<div class="form-group">
                                    			<label>รูปภาพ ขนาด 474px * 647px (ใช้สำหรับแสดงบน Mobile Version) </label>
                                    			<input  type="file" name="slide_Images_min" id="Images2" onchange="readURL(this,'preview2')">


                                    			<img style="display:none;" id="preview2" class="img-thumbnail" src="" alt="preview" width="400" />


                                    		</div>  
                                    	</div>
                                    </div>
-->




                                </div>


                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </form>



        <script>
        	$('#Images').filer({
        		limit: 1,

        	});
        	$('#Images2').filer({
        		limit: 1,

        	});	

        	function readURL(input,id) {

        		if (input.files && input.files[0]) {
        			var reader = new FileReader();

        			reader.onload = function (e) {

        				$("#"+id).css("display", "block").prop("src", e.target.result);
        			}

        			reader.readAsDataURL(input.files[0]);
        		}
        	}

        </script>

