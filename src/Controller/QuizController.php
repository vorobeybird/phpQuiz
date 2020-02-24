<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use App\Form\AnswerType;
use App\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class QuizController extends AbstractController
{
    /**
     * @Route("/quiz", name="quiz.index")
     */
    public function index()
    {
        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
        ]);
    }

    /**
     * @Route("/makeQuestion", name="makeQuestion")
     * @param Request $request
     * @return Response
     */
    public function makeQuastion(Request $request)
    {
        $question  = new Question();
        $form = $this->createForm(QuestionType::class,$question);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();
            return $this->redirect($this->generateUrl('makeAnswer.index'));
        }

        return $this->render('post/create.html.twig', [
        'form' => $form->createView()
         ]);
    }

    /**
     * @Route("/makeAnswer", name="makeAnswer.index")
     * @param Request $request
     * @return Response
     */
    public function createAnswers(Request $request)
    {
        $answer = new Answer();
        $answer->setTitle('Please provide new answer');

        $form = $this->createForm(AnswerType::class,$answer);
        $form->handleRequest($request);

        if ($form->isSubmitted()){

                $em = $this->getDoctrine()->getManager();
                $em->persist($answer);
                $em->flush();
                $this->addFlash('success','You successfully created answer!');
                return $this->redirect($this->generateUrl('makeAnswer.index'));

        }

        return $this->render('quiz/index.html.twig',
            [
            'form' => $form->createView(),
            ]);
    }

    /**
     * @Route("/quizInterface/{quiz_id}", name="quiz_interface")
     * @param $quiz_id
     * @return Response
     */
    public function quizProvider($quiz_id)
    {

        $question = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findBy(['quiz'=>$quiz_id]);

        $answers = $this->getDoctrine()
            ->getRepository(Answer::class)
            ->findAll();
        dump($answers);
        return $this->render('quiz/quiz.html.twig', [
            'question' => $question,
            'answers' => $answers

        ]);
    }

}
