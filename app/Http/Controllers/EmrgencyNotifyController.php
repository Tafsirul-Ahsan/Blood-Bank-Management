<?php

namespace App\Http\Controllers;

use App\AdminNotify;
use App\BloodBankSearch;
use Illuminate\Http\Request;
use App\EmrgencyNotify;
use App\Reward;
use App\User;
use Auth;

class EmrgencyNotifyController extends Controller
{
    public function requestForMessage()
    {
        $items = EmrgencyNotify::where('id_id', 2)->get();
        $keys = EmrgencyNotify::where('id_id', Auth::user()->id)->get();
        return view('dashboard.notify.message', compact('items', 'keys'));
    }
    public function requestForMessages(Request $request)
    {
        $message_request = new EmrgencyNotify();
        $message_request->id_id = Auth::user()->id;
        $message_request->user_id = true;
        $message_request->message =  $request->message;
        $message_request->save();

        return back();
    }

    public function notify()
    {
        $items = AdminNotify::get();
        return view('dashboard.notify', compact('items'));
    }
    public function site_notify()
    {
        $items = AdminNotify::get();
        return view('site.notify', compact('items'));
    }
    public function store_notify(Request $request)
    {
        $message_request = new AdminNotify();
        $message_request->notify =  $request->notify;
        $message_request->save();

        return back();
    }

    public function rewards()
    {
        $items = Reward::get();
        return view('dashboard.rewards.reward', compact('items'));
    }

    public function site_rewards()
    {
        $items = Reward::get();
        return view('site.reward', compact('items'));
    }
    public function reward(Request $request)
    {
        $image_file = $request->file('image');
        $image_file_name = time() . $image_file->getClientOriginalName();
        $image_file->move(public_path('./uploads/'), $image_file_name);

        $image_file = $request->file('image2');
        $image_file_name2 = time() . $image_file->getClientOriginalName();
        $image_file->move(public_path('./uploads/'), $image_file_name2);


        $message_request = new Reward();
        $message_request->image =  $image_file_name;
        $message_request->image2 =  $image_file_name2;
        $message_request->name =  $request->name;
        $message_request->complete_camp =  $request->complete_camp;
        $message_request->rewards_earn =  $request->rewards_earn;
        $message_request->reward_name =  $request->reward_name;
        $message_request->save();

        return back();
    }

    public function index()
    {
        $items = BloodBankSearch::get();
        return view('dashboard.blood.bank', compact('items'));
    }
    public function site()
    {
        $items = BloodBankSearch::get();
        return view('site.blood.bank', compact('items'));
    }
    
    public function store(Request $request)
    {
        $image_file = $request->file('image');
        $image_file_name = time() . $image_file->getClientOriginalName();
        $image_file->move(public_path('./uploads/'), $image_file_name);

        $message_request = new BloodBankSearch();
        $message_request->image =  $image_file_name;
        $message_request->name =  $request->name;
        $message_request->address =  $request->address;
        $message_request->avilable = 0;
        $message_request->contact =  $request->contact;
        $message_request->blood_group =  $request->blood_group;
        $message_request->save();

        return back();
    }
    public function confirm($id)
    {
        $order = BloodBankSearch::where('id', $id)->first();
        $order->avilable = 1;
        $order->save();

        return back();
    }
}
