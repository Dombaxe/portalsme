<form  method="get"  role="search" action="<?php echo home_url('/'); ?>">
    
    <div class="input-group input-dom">
                             
        <input class="form-control linha_input border-top-0 border-right-0 border-left-0" type="search" value="<?php echo get_search_query(); ?>" name="s" required />

        <button class="btn btn-primary btn-sm ml-3 linha_btn" type="submit">Buscar</button>
    
    </div>
                          
</form>