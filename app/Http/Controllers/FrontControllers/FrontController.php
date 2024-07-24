<?php

namespace App\Http\Controllers\FrontControllers;

use App\Helpers\WebResponses;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\CMSPages;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Services\Admin\CMSPagesService;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
   protected $cmsPagesService;
   protected $userService;

   public function __construct(CMSPagesService $cmsPagesService, UserService $userService)
   {
      $this->cmsPagesService = $cmsPagesService;
      $this->userService = $userService;
   }

   public function index()
   {

       $page = $this->cmsPagesService->getPageBySlug('home');
      return view(
         'front.pages.index'
          ,compact('page')
      );
   }

   public function about()
   {
      $page = $this->cmsPagesService->getPageBySlug('about');
      // $data = $page->content;
      return view(
         'front.pages.about',
         compact('page')
      );
   }

   public function contact()
   {
      $page = $this->cmsPagesService->getPageBySlug('contact');
      return view(
         'front.pages.contact-us'
         ,
         compact('page')
      );
   }

   public function faq()
   {
       $page = $this->cmsPagesService->getPageBySlug('faq');
       $faqs = Faq::get();
      return view(
         'front.pages.faq'
          ,compact('page','faqs')
      );
   }


   public function gallery()
   {
       $page = $this->cmsPagesService->getPageBySlug('graduate');

      return view(
         'front.pages.gallery'
          ,compact('page')
      );
   }

   public function blogs()
   {
       $page = $this->cmsPagesService->getPageBySlug('blog');

      return view(
         'front.pages.blogs-and-articales'
          ,compact('page')
      );
   }


   public function boardAndTrain()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.board-and-train'
         //  ,compact('data','page')
      );
   }

   public function privateLesson()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.private-lesson'
         //  ,compact('data','page')
      );
   }


   public function groupTraining()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.group-training'
         //  ,compact('data','page')
      );
   }


   public function summerMiniSessions()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.summer-mini-sessions'
         //  ,compact('data','page')
      );
   }

   public function protectingYourDog()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.protecting-your-dog'
         //  ,compact('data','page')
      );
   }

   public function theWelfareDog()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.the-welfare-dog'
         //  ,compact('data','page')
      );
   }

   public function followThrough()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.follow-through'
         //  ,compact('data','page')
      );
   }

   public function adoptingAServiceDog()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.adopting-a-service-dog'
         //  ,compact('data','page')
      );
   }
   public function training()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.training'
         //  ,compact('data','page')
      );
   }

   public function cart()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.cart'
         //  ,compact('data','page')
      );
   }

   public function checkout()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.checkout'
         //  ,compact('data','page')
      );
   }
   public function payment()
   {
      //  $page = $this->cmsPagesService->getPageBySlug('retail');
      //  $data = $page->content;

      return view(
         'front.pages.payment'
         //  ,compact('data','page')
      );
   }
   // public function contactForm(ContactRequest $request)
   // {
   //    try {
   //       // Save contact information
   //       $contact = new Contact();
   //       $contact->first_name = $request->first_name;
   //       $contact->last_name = $request->last_name;
   //       $contact->email = $request->email;
   //       $contact->phone = $request->phone;
   //       $contact->message = $request->message;
   //       $contact->subject = $request->subject;
   //       $contact->client_type = $request->client_type;
   //       $contact->save();

   //       // If there is an uploaded photo, add it to the media collection
   //       // If there is an uploaded photo, add it to the media collection
   //       if ($request->hasFile('photo')) {
   //          $contact->addMedia($request->file('photo'))->toMediaCollection('contact_image');
   //       }

   //       $to_email = 'info@finedesign-gal.com';
   //       $from_email = $request->email;
   //       // Prepare the email content
   //       $html = "<p><strong>Name:</strong> " . $request->first_name . " " . $request->last_name . "</p>";
   //       $html .= "<p><strong>Email:</strong> " . $request->email . "</p>";
   //       $html .= "<p><strong>Phone:</strong> " . $request->phone . "</p>";
   //       $html .= "<p><strong>Message:</strong> " . $request->message . "</p>";

   //       if ($request->hasFile('photo')) {
   //          $imagePath = $contact->getFirstMediaUrl('contact_image');
   //          $html .= "<p><strong>Attached Image:</strong></p>";
   //          $html .= "<img src='" . $imagePath . "' width='100%' />";
   //       }

   //       // Send the email
   //       Mail::send([], [], function ($message) use ($html, $to_email, $from_email) {
   //          $message->to($to_email)
   //             ->subject('Test Email')
   //             ->setBody($html, 'text/html');
   //          $message->from($from_email, 'Test Mail');
   //          ;
   //       });

   //       return WebResponses::successRedirectBack('Contact Form Submit Successfully');
   //    } catch (\Exception $exception) {
   //       return WebResponses::errorRedirectBack($exception->getMessage());
   //    }
   // }

}
