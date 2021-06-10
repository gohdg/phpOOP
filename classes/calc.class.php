<?php
// Interfaces

interface PaymentInterface
{
  public function payNow();
}
class Paypal implements PaymentInterface
{
  public function loginFirst()
  {
  }
  public function payNow()
  {
  }

  public function paymentProcess()
  {
    $this->loginFirst();
    $this->payNow();
  }
}
class Visa implements PaymentInterface
{
  public function payNow()
  {
  }
  public function paymentProcess()
  {
    $this->payNow();
  }
}
class Cash implements PaymentInterface
{
  public function payNow()
  {
  }
  public function paymentProcess()
  {
    $this->payNow();
  }
}

class BuyProduct
{
  public function pay(PaymentInterface $paymentType)
  {
    // $paymentType->loginFirst(); //paypal 일때 인데, cash나 visa 일경우에는 에러 우짜지? => 하나의 메서드를 더 정의한다 모든 클래스에 paymentProcess 그안에서 login 여부 결정. BuyProduct에서는 그냥 동일 메서드 이름인 paymentProcess만 call
    // $paymentType->payNow();
    $paymentType->paymentProcess();
  }
}
// class BuyProduct{
//     public function pay(Cash $paymentType){ // 클래스의 메소드의 매개변수롤 object로 넘길 수가 있는데, 아래와 같이 paymentType 정해서 념겨주면 그에 맞는 자료형 선언, 여기서는 어떤 object형 인지 알려 줘야 한다, 정적으로가 아닌 동적으로 payment type을 결정할때 interface를 활용

//     }
// }

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType); // Cash object 를 매개 변수로 전달
