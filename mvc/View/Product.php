<?php
class View_Product
{
    public function __construct()
    {

    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';

            $form .= '<div>';
	        	$form .= $this->creteTextField('group1[product_name]', "Product Name: ");
	        $form .= '</div>';
	  
      
            $form .= '<div>';
	        	$form .= $this->creteTextField('group1[sku]', "Sku: ");
	        $form .= '</div>';

      
            $form .= $this->createRadioButton('group1[Product_type]', "Product Type: ", "Simple", "simple", true);
	        	$form .= $this->createRadioButton('group1[Product_type]', "", "Bundle", "bundle");
                $form .= "<br><br>";
	        $form .= '</div>';


	        $form .= '<div>';
                $options=[
                'bar&game_room' => 'Bar & Game Room',
                'bedroom'=>'Bedroom',
                'decor'=>'Decor',
                'dining&kitchen'=>'Dining & Kitchen',
                'lightning'=>'Lightning',
                'living_room'=>'Living Room',
                'mattresses'=>'Mattresses',
                'office'=>'Office',
                'outddor'=>'Outdoor'
                ];

	        	$form .= $this->createCategory('group1[category]', "Category: ", $options, '');
	        $form .= '</div>';



            $form .= '<div>';
                $form .= $this->creteTextField('group1[manufacture_cost]', "Manufacture Cost: ");
            $form .= '</div>';
      
            $form .= '<div>';
	        	$form .= $this->creteTextField('group1[price]', "Price: ");
	        $form .= '</div>';
	  
      
            $form .= '<div>';
	        	$form .= $this->creteTextField('group1[manufacturer_cost]', "Cost: ");
	        $form .= '</div>';
	  
      
            $form .= '<div>';
	        	$form .= $this->creteSubmitBtn('Submit');
	        $form .= '</div>';

		$form .= '</form>';
		return $form;
    }

    public function createRadioButton($name, $title, $value = '', $id='',$selected=false){

        $radioButton = '<span>' . $title . '</span><input id="' . $id . '" type="radio" name="' . $name.'" value="' . $value . '"';

        if($selected){
            $radioButton .='checked';
        }
        $radioButton .= '> <label for="'.$id.'">'.$value.'</label>';
        return $radioButton;
    }



    public function createCategory($name, $title, $options , $id, $selected=false){

        $category = '<span>'. $title .'</span><select name="'.$name.'"id="'. $id .'">';

        foreach($options as $value => $label){
            $category .= '<option value="' . $value.'"> '.$label.'</option>';
            if($selected){$category .= 'selected';}
        }
        $category .= '</select><br><br>';
        return $category;
    }


    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }

    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml()
    {
    	return $this->createForm();
    }
}



// <?php
// // print_r($_POST);
// class View_Product{
//     public function __construct()
//     {
        
//     }

//     public function createForm($title){
//         $option1 =['Bar & Game Room','Bedroom','Decor','Dining & Kitchen','Lighting','Living Room','Mattresses','Office','Outdoor'];
//         $option2 =['enabled','disabled'];
//         $form = '<form action="" method="post">';
//         $form .= '<fieldset>';
//         $form .= '<legend>'.$this->createTitle($title).'</legend>';
//         $form .= '<div>';
//         $form .= $this->createTextField("product Name",'pdata[product_name]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createTextField("SKU",'pdata[sku]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= '<span>Product Type: </span>';
//         $form .=$this->createRadioButton('simple','pdata[product_type]','','simple',true);
//         $form .=$this->createRadioButton('bundle','pdata[product_type]','','bundle',false);
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createSelect('category','pdata[category]',$option1,'','Bedroom');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createTextField("Manufacturer Cost",'pdata[manufacturer_cost]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createTextField("Shipping Cost",'pdata[shipping_cost]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createTextField("Total Cost",'pdata[total_cost]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createTextField("Price",'pdata[price]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createSelect('Status','pdata[status]',$option2,'','disabled');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createCalenderDate('Created At','pdata[created_at]');
//         $form .= '</div>';
//         $form .= '<div>';
//         $form .= $this->createCalenderDate('Updated At','pdata[updated_at]');
//         $form .= '</div>';
//         $form .= $this->createSubmitButtton('submit');
//         $form .= '</fieldset>';
//         $form .= '</form>';
//         return $form;
//     }

//     public function createTitle($title){
//         $Title = "<h1>{$title}</h1>";
//         return $Title;
//     }

//     public function createTextField($title,$name,$id='',$value=''){
//             $inputField = '<label for="'. $title .'">'. $title. ':</label>';
//             $inputField .= '<input type="text" name="'.$name.'" id="'.$id.'" value="'.$value.'">';
//             return $inputField;
//     }
//     public function createRadioButton($title,$name,$class='',$value='',$checked){
//         $button = '<label for="'.$title.'">' .$title.' :</label>';
//         $button .= '<input type="radio" name="'.$name.'" class="'.$class.'" value="'.$value.'"';
//         if($checked){
//             $button .= 'checked>';
//         }
//         return $button;
//     }
//     public function createSubmitButtton($value,$name=''){
//         $submit = '<input type="submit" value="'.$value.'" name="'.$name.'">';
//         return $submit;
//     }

//     public function createCalenderDate($title,$name,$value='',$id=''){
//         $date = '<label for="'.$title.'">'.$title.' :</label>';
//         $date .= '<input type="Date" id="'.$id.'" name="'.$name.'" value="'.$value.'"></inPut>';
//         return $date;
//     }

//     public function createSelect($title,$name,$options=[],$id,$selected){
//         $select = '<label for="'.$title.'">'.$title.':</label>';
//         $select .= '<select name="'.$name.'" id="'.$id.'">';
//             foreach($options as $value){
//                       $select .= '<option value="'.$value.'"';
//                       if($selected==$value){
//                           $select .= 'selected';
//                       }
//                       $select .='>'.$value.'</option>';
//             };
//         $select .= '</select>';
//         return $select;
//     }

//     public function toHtml($title){
//         return $this->createForm($title);
//     }
// }
//

?>