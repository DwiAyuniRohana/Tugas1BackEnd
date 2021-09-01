<div id="tooplate_sidebar">
        <div id="tooplate_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
        
        <div class="sidebar_section">
        	<h3>Categories</h3>
            <ul class="sidebar_link_list">
				<?php include "include/database.php";
				$query="select * from kategori";
				$data =mysql_query($query);
				while($row=mysql_fetch_assoc($data)){
					$nama=$row['nama'];
				
				?>	
			  <li><a href="#"><?php echo $nama ?></a></li>
				<?php }
				?>
            </ul>
        </div>
        
      
        
    </div>