<nav aria-label="Page navigation example">
    <ul class="pagination pagination-sm justify-content-center mb-5 mt-5" id="pagination">

        <?php
        for($p = 1; $p <= $num_pages; $p++){
        ?>
       
        <li class="page-item <?=$p==$page ? 'active' : ''?>" id="button_<?=$p?>"><button class="page-link" onclick="changePage(<?=$p?>)"><?=$p?></button></li>
       
        <?php } ?>
    </ul>
</nav>


<script>
    const changePage = (page) =>{

        console.log(">>> changePage: page",page)

        window.location.href = `/index.php?page=${page}`
    }
</script>