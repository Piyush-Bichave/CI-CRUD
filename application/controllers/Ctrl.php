<?php 

class Ctrl extends CI_Controller 
{

    public function index()
    {
        $this->load->model('crud_model');
        $data['product_details']=$this->crud_model->getAllProducts();
        $this->load->view('crud_view' ,$data );
    }

    public function addProduct()
    {
        $this->form_validation->set_rules('name', 'Product name' ,'trim|required');
        $this->form_validation->set_rules('price', 'Product price' ,'trim|required');
        $this->form_validation->set_rules('quantity', 'Product quantity' ,'trim|required');

        if($this->form_validation->run()==false)
        {
            $data_error=[
                'error'=>validation_errors()
            ];
            $this->session->set_flashdata($data_error);
        }
        else
        {
            $result=$this->crud_model->insertProduct([
                'name'=>$this->input->post('name'),
                'price'=>$this->input->post('price'),
                'quantity'=>$this->input->post('quantity')

            ]); 
            if($result)
            {
                $this->session->set_flashdata('inserted','Your data has been successfully added !');

            }

        }
        redirect('Ctrl');
        

        
 
    }
    public function editProduct($id)
    { $this->load->model('crud_model');

       $data['pro'] = $this->crud_model->getSingleProduct($id);

        $this->load->view('edit_view',$data);


    }
    public function deleteProduct($id)
    {
        $result=$this->crud_model->deleteItem($id);
 ;       if($result==true)
        {
            $this->session->set_flashdata('deleted','The product has been deleted !');
        }
        redirect('Ctrl');
    }
   
}

?>



