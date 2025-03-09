<!-- Delete Confirmation Modal -->
<div class="modal fade" id="delete_post" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="remove_register.php" method="post">
                <div class="modal-body">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove this post?</h5>
                    <input type="hidden" id="dele_post" name="dele_post"> 
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="value_remove" name="remove_id">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function remove_register(id) {
        document.getElementById("dele_post").value = id; // Set ID in hidden input
    }
</script>
