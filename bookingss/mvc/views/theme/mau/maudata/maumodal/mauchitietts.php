<style>
.tab-scroll-ctts::-webkit-scrollbar {
  display: none;
}
</style>
<div class="tab-scroll-ctts" style="overflow-x: auto;height:80h">
    <div class="card shadow">
      <img src="public/upload/<?php echo $valts->image; ?>" class="object-fit-cover" alt="Ảnh tài sản 1" style="height: 200px; width: 100%; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $valts->name; ?></h5>
        <p class="card-text text-black-50 text-wrap"><?php echo $valts->content; ?></p>
      </div>
    </div>
</div>