<div class="modal fade" role="dialog" id="addprod">
<div class="modal-dialog" style="min-width:50%">
<div class="modal-content p-5">

    <h3>Add Products here</h3>
    <form method="post" enctype="multipart/form-data">
    <div class="form-group mt-3">
    <input type="file" name="img" class="form-control">
    </div>

    <div class="form-group mt-3">
        <input type="text" name="pname" placeholder="Enter products name "  class="form-control">
    </div>

    <div class="form-group mt-3">
        <input type="text" name="price" placeholder="Enter products Price "  class="form-control">
    </div>

    <div class="form-group mt-3">
        <input type="number" name="qty" placeholder="Enter products qty "  class="form-control">
    </div>

    <div class="form-group mt-3">
        <textarea name="desc" placeholder="Enter products descriptions "  class="form-control"></textarea>
    </div>

    <div class="form-group mt-3">
        <input type="submit" name="addproduct" value="AddProducts"   class="btn btn-dark bg-dark text-white">
    </div>



    </form>    

</div>    
</div>    
</div>    