<?php

namespace CRUD\Controller;

use CRUD\Helper\PersonHelper;
use CRUD\Model\Actions;
use CRUD\Model\Person;

class PersonController
{
    public function switcher($uri,$request)
    {
        switch ($uri)
        {
            case Actions::CREATE:
                $this->createAction($request);
                break;
            case Actions::UPDATE:
                $this->updateAction($request);
                break;
            case Actions::READ:
                $this->readAction($request);
                break;
            case Actions::READ_ALL:
                $this->readAllAction($request);
                break;
            case Actions::DELETE:
                $this->deleteAction($request);
                break;
            default:
                break;
        }
    }



    public function createAction($request)
    {
        $helper = new PersonHelper();
        $person = new Person();


        $person->setId($request[1]);
        $person->setFirstName($request["firstName"]);
        $person->setLastName($request["lastName"]);
        $person->setUsername($request["username"]);

        if($helper->insert($person))
            echo 'Done';
        else
            echo 'Error';
    }

    public function updateAction($request)
    {
        $helper = new PersonHelper();
        $person = new Person();


        $person->setId($request[1]);
        $person->setFirstName($request["firstName"]);
        $person->setLastName($request["lastName"]);
        $person->setUsername($request["username"]);

        if($helper->update($person))
            echo 'Done';
        else
            echo 'Error';
    }

    public function readAction($request)
    {
        $helper = new PersonHelper();

        if($helper->fetch($request['id']))
            echo 'Done';
        else
            echo 'Error';


    }
    public function readAllAction($request)
    {
        $helper = new PersonHelper();

        if($helper->fetchAll())
            echo 'Done';
        else
            echo 'Error';

    }

    public function deleteAction($request)
    {
        $helper = new PersonHelper();

        if($helper->delete($request['id']))
            echo 'Done';
        else
            echo 'Error';

    }

}