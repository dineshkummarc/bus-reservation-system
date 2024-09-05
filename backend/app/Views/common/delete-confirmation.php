<form action="<?php echo base_url($action) ?>" method="post">
    <?php echo $this->include('common/delete') ?>
    <input type="hidden" name="ref" value="<?php echo $ref; ?>">

    <?php foreach ($tdArr as $sdArr) : ?> 
        <h5 style="text-transform: capitalize; font-size: 16px; font-weight: bold; background-color: #e8e8e8; padding: 5px 15px;"><?php echo $sdArr['title']; ?></h5>
    
        <ul>
    
            <?php foreach ($sdArr['data'] as $sd) : ?> 
                <li style="list-style-type: none;"><?php echo sprintf('%s (%s)', $sd->name, $sd->id) ; ?></li>
            <?php endforeach ?>
    
        </ul>
        <br />
    <?php endforeach ?>
    
    <div class="text-end">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
    </div>
</form>
