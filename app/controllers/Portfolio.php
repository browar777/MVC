<?PHP



class Portfolio extends Controller
{
	public function index($article)
	{

		if(empty($article))
		{
			$DB = new DB;
			$data = $DB->select("SELECT article_title FROM article",'column');
			
			$data = array_chunk($data, 4);
			$this->view('pages/Portfolio/index',$data);
		}
		else
		{

			$DB = new DB;
			$data = $DB->select("SELECT article_content FROM article WHERE article_title='$article[0]'",'column');
			

			if(!$data)
			{
				
				$article[0] = Shift::add($article[0]);
				$data = $DB->select("SELECT article_content FROM article WHERE article_title='$article[0]'",'column');

					if(!$data)
					{
						$data[0] = 'Nieznaleziono artykulu';
					}
			}

			$this->view('pages/Portfolio/show',$data);
			
			
		}
		
		
	}//End index


	public function create()
	{
		if(isset($_POST['token']))
		{
			if(Token::check($_POST['token']))
			{
				$title = $_POST['title'];
				//dodawanie pauzy w mijsce spacji i astapywanie pauz tyldami
				$title = Shift::add($title); 
				$article = $_POST['article'];
				$DB = new DB;
			    $DB->insert("INSERT INTO article VALUES(NULL,'$title','$article',NOW(),0)");
			   
			    $this->index(null);

			}
			else
			{
				$this->view('pages/Portfolio/create');
			}
		}
		else
		{
			$this->view('pages/Portfolio/create');
		}
	}
	
	
}