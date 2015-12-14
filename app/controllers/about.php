<?PHP



class About extends Controller
{
	public function index()
	{
	//	$user = $this->model('User');
	//	$user->name = $name;
		
	
			$this->view('pages/about/index');
		
		
	}

	public function phone()
	{
	//	$user = $this->model('User');
	//	$user->name = $name;
		
	
			$this->view('pages/about/phone');
		
		
	}

	public function adres()
	{
	//	$user = $this->model('User');
	//	$user->name = $name;
		
	
			$this->view('pages/about/adres');
		
		
	}
	
	
}