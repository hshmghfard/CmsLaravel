<?php
namespace App\lib;
use Illuminate\Html\FormFacade;
use App\lib\Jdf;
use App\TblComment;
use App\TblPost;
use App\User;
use App\FavoritsModel;
use Session;

class CommentShow{

	public static function view($array1,$array2,$model,$update=true,$total,$ntable)
   {
      if(isset($model[0]))
      {
         
         $Jdf=new Jdf();
       ?>
       <table id="tbl_product" class="table table-striped" >
        <tr>
          <?php
          foreach($array1 as $key=>$value) :
            ?>
          <td style="background:#48adff;font-family:Yekan;color:#ffffff;"><?= $value ?></td>
          <?php endforeach; ?>
        </tr>

        <?php
         $j=0;
         foreach ($model as $model) 
         {
          ?><tr style=" border-bottom: 1px solid #48ADFF;"><?php
          $j++;
          for($i=0;$i<sizeof($array2);$i++)
          {
            if($array2[$i]=='-')
            {
              echo '<td >'.$j.'</td>';
            }
            else 
              {
                if($array2[$i]=='date')
                {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif($array2[$i]=='comment_date'){
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='comment_replay') {

                	if($model->$array2[$i]=='0')
                	{
                		echo '<td>'.'--'.'</td>'; 
                	}
                	else
                	{
                		$comment=TblComment::where('id',$model->$array2[$i])->first();
                		echo '<td>'.$comment['comment_content'].'</td>'; 
                	}
                }

                elseif($array2[$i]=='post_date'){
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif($array2[$i]=='user'){
                  $post=User::where('id',$model->$array2[$i])->first();
                  echo '<td>'.$post['name'].'</td>'; 
                }
                elseif ($array2[$i]=='post_id') {

                	$post=TblPost::where('id',$model->$array2[$i])->first();
                	$url=Url('content/'.$post['post_url']);
                	echo '<td><a href="'.$url.'" target="_balck">'.$post['post_url'].'</a></td>'; 
                }
                elseif($array2[$i]=='qu_category')
                {

                  $post=FavoritsModel::where('id',$model->$array2[$i])->first();
                  echo '<td>'.$post['favo_name'].'</td>'; 

                }

                elseif($array2[$i]=='qu_user')
                {

                  $post=User::where('id',$model->$array2[$i])->first();
                  echo '<td>'.$post['name'].'</td>'; 

                }


                elseif($array2[$i]=='id_user')
                {

                  $post=User::where('id',$model->$array2[$i])->first();
                  echo '<td>'.$post['name'].'</td>'; 

                }

                elseif($array2[$i]=='request_ansewer')
                {

                  if($model->$array2[$i]=='')
                  {
                    echo '<td style="color:red;"> پاسخی ثبت نشده </td>'; 
                  }
                  else
                  {
                    echo '<td>'.$model->$array2[$i].'</td>';
                  } 

                }

                elseif($array2[$i]=='request_state')
                {

                  if($model->$array2[$i]=='0')
                  {
                    echo '<td style="color:red;background-color:yellow"> در حال انتظار </td>'; 
                  }
                  else
                  {
                    echo '<td style="color:#ffffff;background-color:green"> تایید </td>'; 
                  }

                }


                elseif($array2[$i]=='qu_state')
                {
                    
                  if($model->$array2[$i]=='0')
                  {
                    echo '<td style="color:red;background-color:yellow"> در حال انتظار </td>'; 
                  }
                  else
                  {
                    echo '<td style="color:#ffffff;background-color:green"> تایید </td>'; 
                  }

                }

                elseif($array2[$i]=='comment_state'){

                	if($model->$array2[$i]=='0')
                	{
                		echo '<td style="color:red;background-color:yellow"> در حال انتظار </td>'; 
                	}
                	else
                	{
                		echo '<td style="color:#ffffff;background-color:green"> تایید </td>'; 
                	}

                }

                elseif ($array2[$i]=='ansewer_date') {
                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 
                }

                elseif ($array2[$i]=='ansewer_state') {
                  if($model->$array2[$i]=='0')
                  {
                    echo '<td style="color:red;background-color:yellow"> در حال انتظار </td>'; 
                  }
                  else
                  {
                    echo '<td style="color:#ffffff;background-color:green"> تایید </td>'; 
                  }
                }

                elseif($array2[$i]=='roule')
                {
                  if( $model->$array2[$i]!='1' )
                  {
                    echo '<td style="color:yellow;"> مشترک </td>';
                  }
                  else
                  {
                    echo '<td style="color:green;"> مدیر </td>'; 
                  }
                }

                elseif($array2[$i]=='info')
                {
                  if( $model->$array2[$i]=='' )
                  {
                    echo '<td style="color:red;"> وارد نشده </td>'; 
                  }
                  else
                  {
                    echo '<td>'.$model->$array2[$i].'</td>'; 
                  }
                }

                elseif ($array2[$i]=='call_date') {

                  echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->$array2[$i]).'</td>'; 

                }

                elseif ($array2[$i]=='call_state') {

                  if($model->$array2[$i]=='0')
                  {
                    echo '<td style="color:red;background-color:yellow"> در حال انتظار </td>'; 
                  }
                  else
                  {
                    echo '<td style="color:#ffffff;background-color:green"> تایید </td>'; 
                  }
                  
                }

                else
                {
                  echo '<td>'.$model->$array2[$i].'</td>'; 
                }
                
               
            }
          }
          echo '<td>';

          $url= asset('/admin/'.$ntable.'/'.$model['id'].'/edit'); 

          if($update)
          {
          ?>
          <a href="<?= $url ?>"><img src="<?= url('resources/image/check-on.png') ?>" /></a>
          <?php }

          $route= asset('/admin/'.$ntable.'/'.$model['id']);  
          ?>
          <img src="<?= asset('resources/image/15.gif') ?>" onclick="del_row('<?= $route ?>')" />

            
          </td>
          </tr><?php
         }
 
        ?>

        </table>
 <?php
           
           $token=Session::token();

           ?>
        <script type="text/javascript">
        function del_row(route)
        {
          if (!confirm("آیا از حذف این رکورد اطمینان دارید !"))
          return false;
           var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action",route);
            

            var hiddenField1 = document.createElement("input");
            hiddenField1.setAttribute("name", "_method");
            hiddenField1.setAttribute("value",'DELETE');
            form.appendChild(hiddenField1);

            var hiddenField2 = document.createElement("input");
            hiddenField2.setAttribute("name", "_token");
            hiddenField2.setAttribute("value",'<?= $token ?>');
            form.appendChild(hiddenField2);

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }
        </script>
        
       <?php
return true;
      }
      else
      {
         return false;
      }
   }

}




?>