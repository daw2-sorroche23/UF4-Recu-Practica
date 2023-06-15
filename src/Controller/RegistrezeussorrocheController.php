<?php

namespace App\Controller;

use App\Entity\Addresseszeussorroche;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Range;





class RegistrezeussorrocheController extends AbstractController
{
    #[Route('/registrezeussorroche', name: 'registrezeussorroche')]
    public function index(Request $request, ValidatorInterface $validator

    ): Response

        {

            // creates a task object and initializes some data for this example
            $task = new Addresseszeussorroche();
            
            $form = $this->createFormBuilder($task)
                ->add('user_id', IntegerType::class, [
                    'constraints' => [
                        new Range([
                            'min' => 1,
                            'max' => 100,
                            'notInRangeMessage' => 'El número debe estar entre {{ min }} y {{ max }}.'
                        ]),
                    ],
                ])
                ->add('street', TextType::class, [
                    'constraints' => [
                        new Length([
                            'min' => 5,
                            'max' => 50,
                            'minMessage' => 'El título debe tener al menos {{ limit }} caracteres.',
                            'maxMessage' => 'El título no puede tener más de {{ limit }} caracteres.',
                        ]),
                    ],
                ])
                ->add('city', TextType::class, [
                    'constraints' => [
                        new Length([
                            'min' => 5,
                            'max' => 50,
                            'minMessage' => 'El título debe tener al menos {{ limit }} caracteres.',
                            'maxMessage' => 'El título no puede tener más de {{ limit }} caracteres.',
                        ]),
                    ],
                ])
                ->add('state', TextType::class, [
                    'constraints' => [
                        new Length([
                            'min' => 5,
                            'max' => 50,
                            'minMessage' => 'El título debe tener al menos {{ limit }} caracteres.',
                            'maxMessage' => 'El título no puede tener más de {{ limit }} caracteres.',
                        ]),
                    ],
                ])
                ->add('save', SubmitType::class, ['label' => 'Create address'])
                ->getForm();
    
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                // El formulario es válido, realiza las acciones necesarias...
            } 
    
            return $this->render('registrezeussorroche/index.html.twig', [
                'form' => $form->createView(),
            ]);
    
        }
    }



