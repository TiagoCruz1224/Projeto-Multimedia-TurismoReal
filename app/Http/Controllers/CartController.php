<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => [
                'image' => $request->img,
            ],
        ]);

        session()->flash('success', __('cart.O Item que escolheu foi adicionado ao carrinho com sucesso !'));

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                ],
            ]
        );

        session()->flash('success', __('cart.O item foi atualizado com sucesso !'));

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);

        session()->flash('success', __('cart.O item foi removido com sucesso!'));

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', __('cart.O carrinho foi limpo com sucesso !'));

        return redirect()->route('cart.list');
    }
}
