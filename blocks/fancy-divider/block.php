<?php 

    $dividerStyle = block_value('divider-type');
    $colorChoice = block_value('chosen-color');

?>

<div class="divider-body">
    <svg class="divider" xmlns="http://www.w3.org/2000/svg" 
        viewBox="
        <?php 
            if( $dividerStyle == 'tilt' || $dividerStyle == 'curve' || $dividerStyle == 'triangle' || $dividerStyle == 'inverse-triangle' 
            || $dividerStyle == 'obtuse-triangle' || $dividerStyle == 'inverse-obtuse-triangle' || $dividerStyle == 'zigzag') { echo '0 0 64 8'; }
            else if( $dividerStyle == 'inverse-curve' ) { echo '0 8 64 8'; }
            else if( $dividerStyle == 'wave' ){ echo '0 4 64 4'; } 
        ?>" 
        preserveAspectRatio="none" width="100%" height="100%">

    <?php if( $dividerStyle == 'tilt') : ?>
            
        <path fill="<?= $colorChoice; ?>" d="M64 7.9 L64 10 L0 10 L0 0 Z"></path>
    
    <?php elseif( $dividerStyle == 'curve' ) : ?>
    
        <path fill="<?= $colorChoice; ?>" d="M64 8 L64 0 Q32 15.8 0 0 L0 8 Z"></path>
    
    <?php elseif( $dividerStyle == 'inverse-curve' ) : ?>
    
        <path fill="<?= $colorChoice; ?>" d="M64 15.9 Q32 0.4 0 15.9 L0 18 L64 18 Z"></path>
    
    <?php elseif( $dividerStyle == 'triangle' ) : ?>
    
        <path fill="<?= $colorChoice; ?>" d="M64 8 L0 8 L0 0 L32 7.9 L64 0 Z"></path>
    
    <?php elseif( $dividerStyle == 'inverse-triangle' ) : ?>
    
        <path fill="<?= $colorChoice; ?>" d="M64 9 L0 9 L0 7.9 L32 0 L64 7.9 Z"></path>
    
    <?php elseif( $dividerStyle == 'obtuse-triangle' ) : ?>        
    
        <path fill="<?= $colorChoice; ?>" d="M64 8 L0 8 L0 0 L48 7.9 L64 0 Z"></path>
    
    <?php elseif( $dividerStyle == 'inverse-obtuse-triangle' ) : ?>
    
        <path fill="<?= $colorChoice; ?>" d="M64 9 L0 9 L0 7.9 L48 0 L64 7.9 Z"></path>
    
    <?php elseif( $dividerStyle == 'wave' ) : ?>

        <path fill="<?= $colorChoice; ?>" d="M64 6 C32 0 32 12 0 6 L0 8 L64 8 Z"></path>

    <?php elseif( $dividerStyle == 'zigzag' ) : ?>      

        <path fill="<?= $colorChoice; ?>" d="M64 8 L0 8 L0 0 L20 7.9 L40 3 L48 5 L64 0 Z"></path>

    <?php endif; ?>
    </svg>
</div>