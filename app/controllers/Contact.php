<?PHP



class Contact extends Controller
{
	public function index($data = array())
	{
	//	$user = $this->model('User');
	//	$user->name = $name;
		
			if(isset($data[1]))
			{
				echo 'Error';
			}
			else
			{

				return $this->view('pages/Contact/index');
			}
			

			
		
		
	}
	
	
}