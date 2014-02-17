<?php namespace Champ\Composers;

use Champ\Account\GenderRepositoryInterface;

class UserComposer {

    /**
     * Gender Repository
     *
     * @var Champ\Account\GenderRepositoryInterface
     */
    protected $gender;

    /**
     * Inject the Gender Repository
     *
     * @param Champ\Account\GenderRepositoryInterface $gender
     */
    public function __construct(GenderRepositoryInterface $gender)
    {
        $this->gender = $gender;
    }

    /**
     * Use the gender in all user views
     *
     * @param  View $view
     */
    public function compose($view)
    {
        $gender = $this->gender->dropDown();
        $view->with(compact('gender'));
    }

}