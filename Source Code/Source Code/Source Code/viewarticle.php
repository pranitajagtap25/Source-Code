<?php 
include("header.php");
if(!isset($_SESSION['adminid']))
{
	echo "<script>window.location='adminloginpanel.php'; </script>";
}
if(isset($_GET['deleteid']))
{
	$sql = "DELETE FROM article WHERE article_id='$_GET[deleteid]'";
	if(!mysqli_query($con,$sql))
	{
		echo "<script>alert('Failed to delete record'); </script>";
	}
	else
	{
		if(mysqli_affected_rows($con)  >= 1)
		{
		echo "<script>alert('This record deleted successfully..'); </script>";
		}
	}
}
?>
  <main id="main">


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
		<br><br>
          <h3>View Articles</h3>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
		

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="info mt-4 ">
			
		<center><h4>View Published Articles...</h4></center><hr>

<?php
							$sql = "SELECT * FROM article";
							  $qsql = mysqli_query($con,$sql);
							if(mysqli_num_rows($qsql)  == 0)
									{
										echo "<center>There is no article to display!!</center>";
									}
									else
									{
										?>
							<table ID="datatable" class="table table-striped table-bordered"  style="width:100%">
								<THEAD>
							  <tr>
							    <th><strong>Article Type</strong></th>
							    <th><strong>Publish Date</strong></th>
							    <th><strong>Title</strong></th>
							    <th><strong>Images</strong></th>
                               	<th><strong>Action</strong></th>
						      </tr>
								</THEAD>
								<TBODY>
                              <?php
							  
							  while($rs = mysqli_fetch_array($qsql))
							  {
							  	echo "<tr>
							    <td>&nbsp;$rs[article_type]</td>
							    <td>&nbsp;" . date("d-m-Y",strtotime($rs['publish_date'])) . "</td>
							    <td>&nbsp;$rs[title]</td>
							    <td>";
								if(file_exists('imgarticle/' . $rs['article_img1']) && $rs['article_img1'] != ''){
									echo "<img src='imgarticle/$rs[article_img1]' width='25' height='25'>";
								}
								if(file_exists('imgarticle/' . $rs['article_img2']) && $rs['article_img2'] != '' ){	
									echo "<img src='imgarticle/$rs[article_img2]' width='25' height='25'>";
								}
								if(file_exists('imgarticle/' . $rs['article_img3']) && $rs['article_img3'] != '' ){
									echo "<img src='imgarticle/$rs[article_img3]' width='25' height='25'>";
								}
								if(file_exists('imgarticle/' . $rs['article_img4']) && $rs['article_img4'] != '' ){
									echo "<img src='imgarticle/$rs[article_img4]' width='25' height='25'>";
								}
								if(file_exists('imgarticle/' . $rs['article_img5']) && $rs['article_img5'] != '' ){
									echo "<img src='imgarticle/$rs[article_img5]' width='25' height='25'>";
								}
								echo "</td>
								<td>&nbsp; <a href='article.php?editid=$rs[article_id]' CLASS='btn btn-info'>Edit</a>  <a href='viewarticle.php?deleteid=$rs[article_id]' onclick='return delconfirm()' CLASS='btn btn-danger'>Delete</a></td>
						      </tr>";
							  }
							  ?>
								</TBODY>
						  </table>
						<?php
						 }
						?>
            </div>
		  </div>
		  
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
<?php
include("footer.php");
?>
<script type="application/javascript">
function delconfirm()
{
	if(confirm("Are you sure you want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>