<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/post", name="post.")
 */
class PostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PostRepository $postRepository
     * @return Response
     */
    public function index(PostRepository $postRepository)
    {
        $quizzes = $postRepository->findAll();
        return $this->render('post/index.html.twig', [
            'quizzes' => $quizzes
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request){
        //create new quiz with title
        $quiz = new Quiz();
        $form = $this->createForm(QuizType::class, $quiz);
        dump($request);

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            dump($form->getData());
            $quiz = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();
            return $this->redirect($this->generateUrl('post.index'));
        }

        //Return a response
        return $this->render('post/create.html.twig',[
           'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/show/{id}", name="show")
     * @param Quiz $quiz

     * @return Response
     */
    public function show(Quiz $quiz){
        //get create show view

        return $this->render('post/show.html.twig',
            [
            'quiz'=> $quiz
            ]);
    }

    /**
     * @Route("/categories/{id}", name="categories")
     * @param PostRepository $postRepository
     * @param $id
     * @return Response
     */
    public function sortByCategory(PostRepository $postRepository,$id){

        $posts = $postRepository->findAll();
        return $this->render('post/categories.html.twig', [
            'posts' => $posts,
            'id' => $id
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     * @param Quiz $post
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function remove(Quiz $post)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();
        $this->addFlash('success','Your post was removed');
        return $this->redirect($this->generateUrl('post.index'));
    }
}
