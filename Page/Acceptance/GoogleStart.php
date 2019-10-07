<?php
namespace Page\Acceptance;

class GoogleStart
{
    	
	public $input=['name' => 'q'];
	public $button=['name' => 'btnK'];

   
   

    /**
     * @var \AcceptanceTester;
     */
    protected $I;

    public function __construct(\AcceptanceTester $I)
    {
        $this->I = $I;
    }

    function fillInput ($query, $sec)
        {
            $this->I->waitForElementVisible($this->input, $sec);
	    $this->I->fillField($this->input, $query);
	}
    
    function submit ()
	{
	    $this->I->waitForElementVisible($this->button, 3);
	    $this->I->click($this->button);
	}

}
