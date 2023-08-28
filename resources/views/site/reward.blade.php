@extends('site.layouts.base')
<style>.at-reward-card {
  z-index: 999999;
  position: fixed;
  top: 50%;
  left: 50%;
  display: flex;
  flex-direction: column;
  background: #FFFFFF;
  width: 500px;
  height: 360px;
  border-radius: 4px;
  box-shadow: 0 0 20px rgba(#000, 0.2);
  font-family: 'Open Sans', sans-serif;
  overflow: hidden;
  transform: translate(-50%, -50%);
  
  &__header {
    position: relative;
    background: #EB60A3;
    height: 140px;
    margin: 0 0 60px;
  }
  
  &__thumbnail {
    position: absolute;
    top: 60px;
    left: 50%;
    display: block;
    margin: 0 auto;
    transform: translateX(-50%);
  }
  
  &__content {
    flex-grow: 1;
    text-align: center;
    
    h2 {
      margin: 0 0 10px;
      padding: 0;
      color: #EB60A3;
      font-size: 20px;
    }
    
    p {
      margin: 0;
      padding: 0;
      color: #444444;
      font-size: 16px;
    }
  }
  
  &__footer {
    display: flex;
    align-items: center;
    flex-direction: row;
    height: 60px;
  }
  
  &__button {
    outline: none;
    display: block;
    background: #FAFAFA;
    width: 100%;
    border: 0;
    margin: 0 1px;
    font-size: 18px;
    line-height: 60px;
    cursor: pointer;
    
    &:hover {
      background: #F3F3F3;
    }
    
    &:first-child {
      margin-left: 0;
      color: #CCCCCC;
    }
    
    &:last-child {
      margin-right: 0;
      color: #EB60A3;
      font-weight: 600;
    }
  }
}
</style>
@section('content')


<div class="at-reward-card">
    @foreach($items as $item)
  <div class="at-reward-card__header">
    <svg class="at-reward-card__thumbnail" width="140" height="140" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
      <title>{{$item->reward_name}}</title>
      <g fill="none" fill-rule="evenodd">
        <path d="M256 475L9 188 116 43l140-15 140 15 107 145z" fill="#FFAE00"/>
        <path d="M256 475L9 188h494z" fill="#CCC"/>
        <path d="M256 475L109 188h294z" fill="#EEE"/>
        <path d="M256 28L109 188h294z" fill="#FFF"/>
        <path d="M116 43l-55 73-52 72h101zM396 43l55 73 52 72H402z" fill="#E7E7E7"/>
        <path d="M116 43l-7 145L256 28zM396 43l7 145L256 28z" fill="#F3F3F3"/>
      </g>
    </svg>
  </div>
  <div class="at-reward-card__content">
    <h2>Congratulations!</h2>
    <p>You are our weekly winner.</p>
  </div>
  <div class="at-reward-card__footer">
    <button class="at-reward-card__button">Earning Points: {{$item->rewards_earn}}</button>
    <button class="at-reward-card__button">Complete Campaign: {{$item->complete_camp}}</button>
  </div>
  @endforeach
</div>

@endsection