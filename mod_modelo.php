<?php
/**
 * RibaFS Modelo Module Entry Point
 * 
 * @package    RibaFS.Modelo
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://ribafs.org
 * mod_ribafs_portfolio is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// Impede acesso direto
defined('_JEXEC') or die;

    $tit = $params->get('titulo');
    $cat = $params->get('categoria');
    $ids = $params->get('ids');

    $ids=explode(',',$ids);
    $id = JURI::base().'index.php?option=com_content&view=article&id=';

     // Query database for cadastro de portfolios entries
     $db = JFactory::getDbo();
     $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__modelo'))
            ->where('categoria = ' . $db->Quote($cat));

     $db->setQuery($query);

     $rows = $db->loadObjectList();    
     $nr=$db->getAffectedRows();

    if(count($rows) == count($ids)) {

        if($nr > 0){  
              $count = 0;
              foreach ($rows as $row) {	
                  $img[$count]= '<a href="'.$id.$ids[$count].'"><img src="'.$row->imagem.'"></a>';
                  $desc[$count]='<div><a href="'.$id.$ids[$count].'">'.$row->descricao . '</a></div>';
                  $count++;
              }
        }else{
           print '<h3>Nenhum Portfolio cadastrado ainda!</h3>';
        }

        ?>
<style>
.esq a {
    margin-left: 5%;
}
</style>
        <h3 align="center"><?=$tit?></h3>       
        <table class="table table-responsive">     

        <?php
        for ($x=0;$x<$nr;$x++){
            if($x==0 || $x==4 || $x==8) print '<tr>';
        ?>
        <td>
           <div><?=$img[$x]?></div>
           <div align="center"><?=$desc[$x]?></div>
        </td>

        <?php 
            if($x==5 || $x==9 || $x==13) print '</tr>';
        }
    }else{
        print '<h4 style="color:#f00">A quantidade de ids do módulo precisa ser igual à quantidade de itens cadastrados para esta categoria!</h4>';
    }
?>
       </table>
