<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">

			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-table"></i> Manage Products </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					<table class="table table-striped table-bordered table-hover" id="dataTables">
						<thead>
							<tr>
								<th width="50">#</th>
								<th>Categoryid</th>
								<th>category</th>
                                                                <th>Description</th>
                                                                <th>price</th>
                                                                <th>stock</th>
                                                                <th>product code</th>
                                                                <th>productsmaterial</th>
                                                                <th>Specification</th>
								<th>Image</th>
								<th width="100">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($results as $key => $row) {  ?>
								<tr>
									<td><?php echo ++$key;?></td>
                                                                        <td><?php echo $row->categoryid;?></td>
									<td><?php echo $row->name;?></td>
									<td><?php echo $row->description;?></td>
                                                                        <td><?php echo $row->price;?></td>
                                                                        <td><?php echo $row->stock;?></td>
                                                                        <td><?php echo $row->productcode;?></td>
                                                                        <td><?php echo $row->productsmaterial;?></td>
                                                                        <td><?php echo $row->specification;?></td>
                                                                        
									<td><img src="<?php echo base_url().'assets/filemanager/products/'.$row->file_name;?>" width="100" height="50" /></td>
									<td> 
										<div class="btn-group dropup">
											<button class="btn btn-xs btn-success">Action</button>
											<button data-toggle="dropdown" class="btn btn-xs btn-success dropdown-toggle">
												<span class="ace-icon fa fa-caret-down icon-only"></span>
											</button>
											<ul class="dropdown-menu dropdown-success">
												<li><a onClick="return altEdit();" href="<?php echo base_url() . 'products/edit/' . $row->id;?>"> <i class="ace-icon fa fa-edit bigger-130"></i> Edit</a></li>
												<li><a onClick="return altDelete();" href="<?php echo base_url() . 'products/delete/' . $row->id.'/'.$row->file_name; ?>" class="red"> <i class="ace-icon fa fa-trash-o bigger-130"></i> Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div><!-- /.span -->
</div><!-- /.row -->


