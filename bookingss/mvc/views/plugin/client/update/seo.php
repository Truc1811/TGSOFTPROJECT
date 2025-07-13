<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="meta_keywords" class="form-label">Seo keywords</label>
    <input type="text" name="meta_keywords" class="form-control" id="meta_keywords"
        value="<?php if(@$_POST['meta_keywords']){ echo $_POST['meta_keywords'];} else { echo $dataa[0]->meta_keywords;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="meta_description" class="form-label">Seo description</label>
    <input type="text" name="meta_description" class="form-control" id="meta_description"
        value="<?php if(@$_POST['meta_description']){ echo $_POST['meta_description'];} else { echo $dataa[0]->meta_description;} ?>"
    >
</div>