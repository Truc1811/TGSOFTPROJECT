<style type="text/css">

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: var(--maucam);
    border-color: var(--maucam);
}

.page-link {
    position: relative;
    display: block;
    color: var(--maucam);
    text-decoration: none;
    border: 1px solid var(--maucam);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


.page-item:hover .page-link{
	border-color: #fff;
}
</style>

<div class="row p-6">
	<div class="col-12 p-4 d-flex justify-content-center align-items-center">
		<nav aria-label="...">
		  <ul class="pagination d-flex flex-wrap">
		    <li class="page-item">
		      <span class="page-link">Trang</span>
		    </li>
		    <?php
		    	$sotrang=json_decode($data['sotrang']);
		    	$trang=json_decode($data['trang']);
		    	$kd= @$data['kd']?json_decode($data['kd']):'all';
		    	$mphantrangpage=explode('/', $page);
		    	$dataphantranglink=str_replace('list','', array_pop($mphantrangpage));
		    	for($i=1;$i<=$sotrang;$i++){
		    ?>
		    <li class="page-item <?php if($trang==$i){ echo 'active';}  ?>">
		    	<a class="page-link" href="<?php echo $dataphantranglink.'/'.$kd.'/'.$i; ?>"><?php echo $i; ?></a>
		    </li>
		    <?php
		    	}
		    ?>
		  </ul>
		</nav>

	</div>
</div>