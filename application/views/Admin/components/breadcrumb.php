<nav ariel-label="breadcrumb">
    <ol class="breadcrumb">
        <?php
            if(!empty($breadcrumbParent)){
        ?>
            <li class="font-weight-bold mb-0 breadcrumb-item active"><?= $breadcrumbParent;?></li>
        <?php 
            }
        ?>
        <li class="font-weight-bold mb-0 breadcrumb-item"><?= $header;?></li>
    </ol>
</nav>