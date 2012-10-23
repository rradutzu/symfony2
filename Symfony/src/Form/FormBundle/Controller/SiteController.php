<?php
namespace Form\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Form\FormBundle\Form\Type\Form;
use Form\FormBundle\Entity\Site;
use Doctrine\ORM\QueryBuilder;

class SiteController extends Controller
{
    public function indexAction()
    {
        $entity = new Site();
        $form = $this->createForm(new Form(), $entity);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form_data=$request->request->get('form');
            if(!isset($form_data['isActive'])){
                $form_data['isActive']=0;
            }else{
                $form_data['isActive']=1;
            }
            $em = $this->getDoctrine()->getManager();
            $entity = new Site();
            $form = $this->createForm(new Form(), $entity);
            $form->bind($request);
            // Fill the entity
            $entity->setName($form_data['name']);
            $entity->setUrl($form_data['url']);
            $entity->setIsActive($form_data['isActive']);
            $em->persist($entity);
            $em->flush();
            return $this->render('FormFormBundle:Form:form.html.twig', array('form' => $form->createView(), 'formMessage' => true,));

        }else{
            return $this->render('FormFormBundle:Form:form.html.twig', array('form' => $form->createView(),'formMessage' => false,));
        }
    }

    public function productsAction($page){
        $show=5;
        $offset = ($page-1)*$show;
        $repository = $this->getDoctrine()
            ->getRepository('FormFormBundle:Site');
        $qb = $repository->createQueryBuilder('p')
            ->select('p')
            ->orderBy('p.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($show)
            ->getQuery();
        $products = $qb->getResult();
        $qb1 = $repository->createQueryBuilder('r')
            ->select('r')
            ->orderBy('r.id', 'ASC')
            ->getQuery();
        $products1 = $qb1->getResult();
        $pages=ceil(count($products1)/5);
        return $this->render('FormFormBundle:Form:products.html.twig', array('products' => $products, 'pages' => $pages, 'curr_page' => $page,));
    }
}
