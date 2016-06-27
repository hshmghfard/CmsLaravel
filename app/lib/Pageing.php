<?php
namespace App\lib;
use Route;
class Pageing
{
	public static function view($page,$count,$url=null)
	{
		$total=ceil($count/10);
		if($total>1)
		{
			
			?>
			<div style="border:1px solid #FFF;float:right;background:#FFF;width:90px;text-align:center;">
				
			 صفحه <?= $page ?> از <?= $total ?>
			</div>
			<?php
			if($page>1)
			{
				?><div style="border:1px solid #FFF;margin-right:10px;padding-right:10px;padding-left:10px;float:right;background:#FFF;text-align:center;"><a style="color:#000" href="<?= self::get_url() ?>page/<?= $page-1 ?>">صفحه قبلی</a></div><?php
			}
			$paged_start=(($page-4)>1) ? $page-4 : 1;
			$paged_last=(($page+4)<$total) ? $page+4 : $total;
			for($paged_start;$paged_start<=$paged_last;$paged_start++)
			{
				if($paged_start!=$page)
				{
					?><div style="border:1px solid #FFF;margin-right:10px;padding-right:10px;padding-left:10px;float:right;background:#FFF;text-align:center;"><a style="color:#000"  href="<?= self::get_url() ?>page/<?= $paged_start ?>"><?= $paged_start; ?></a></div><?php
				}
				else
				{
                  ?><div style="border:1px solid #48ADFF;margin-right:10px;padding-right:10px;padding-left:10px;float:right;background:#48ADFF;text-align:center;" class="active"><?= $paged_start; ?></div><?php
				}
			}

			if($page<$total)
			{
				?><div style="border:1px solid #FFF;margin-right:10px;padding-right:10px;padding-left:10px;float:right;background:#FFF;text-align:center;"><a style="color:#000" href="<?= self::get_url() ?>page/<?= $page+1 ?>">صفحه بعدی</a></div><?php

			}
		}
		
	}
	public static function get_url()
	{
		$url=Route::current()->uri();
		$parameters=Route::current()->parameters();
		if(array_key_exists('page',$parameters))
		{
			$url=str_replace('{page}','', $url);
		}
		if(array_key_exists('menu',$parameters))
		{
			$url=str_replace('{menu}',$parameters['menu'], $url);
		}
		if(array_key_exists('zir_menu',$parameters))
		{
			$url=str_replace('{zir_menu}',$parameters['zir_menu'], $url);
		}
		$url=str_replace('/page/','', $url);
		$url=str_replace('page','', $url);
		if($url=='/')
		{
			return Url().'/';
		}
		else
		{
			return Url().'/'.$url.'/';
		}
		
	}

}