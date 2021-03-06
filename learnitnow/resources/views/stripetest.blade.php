@extends('layouts.app')
@section('contents')
<!-- The Styling File -->
<style>
* {
  box-sizing: border-box;
}

blockquote,
body,
button,
dd,
dl,
figure,
h1,
h2,
h3,
h4,
h5,
h6,
ol,
p,
pre,
ul {
  margin: 0;
  padding: 0;
}

ol,
ul {
  list-style: none;
}

a {
  text-decoration: none;
}

button,
select {
  border: none;
  outline: none;
  background: none;
  font-family: inherit;
}

a,
button,
input,
select,
textarea {
  -webkit-tap-highlight-color: transparent;
}

:root {
  overflow-x: hidden;
  height: 100%;
}

body {
  background: #fff;
  min-height: 100%;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: 62.5%;
  font-family: Roboto, Open Sans, Segoe UI, sans-serif;
  font-weight: 400;
  font-style: normal;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  font-feature-settings: "pnum";
  font-variant-numeric: proportional-nums;
}

.globalContent {
  -ms-flex-positive: 1;
  flex-grow: 1;
}

@font-face {
  font-family: StripeIcons;
  src: url(data:application/octet-stream;base64,d09GRk9UVE8AAAZUAAoAAAAAB6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAADKAAAAx8AAAOKkWuAp0dTVUIAAAZIAAAACgAAAAoAAQAAT1MvMgAAAXAAAABJAAAAYGcdjVZjbWFwAAACvAAAAFYAAACUKEhKfWhlYWQAAAD8AAAAMAAAADYJAklYaGhlYQAAAVAAAAAgAAAAJAYoAa5obXR4AAABLAAAACQAAAAoEOAAWW1heHAAAAD0AAAABgAAAAYAClAAbmFtZQAAAbwAAAD%2FAAABuXejDuxwb3N0AAADFAAAABMAAAAg%2F7gAMgAAUAAACgAAeNpjYGRgYABifeaSpHh%2Bm68MzMwHgCIMl08yqyDo%2F95Mkcy8QC4zAxNIFAD8tAiweNpjfMAQyfiAgYEpgoGBcQmQlmFgYPgAZOtAcQZEDgCHaQVGeNpjYGRgYD7z34eBgSmCgeH%2Ff6ZIBqAICuACAHpYBNp42mNgZtzAOIGBlYGDqYDJgYGBwQNCMwYwGDEcA%2FKBUthBqHe4H4MDg4L6Imae%2Fz4MB5jPMGwBCjOC5Bi9mKYAKQUGBgAFHgteAAAAeNplkMFqwkAURU9itBVKF6XLLrLsxiGKMYH0B4IgoqjdRokajAmNUfolhX5Df7IvZhBt5zHMeffduQwDPPCFQbWM81mzyZ3uocEz95qtK0%2BTN140t2jzLk7DaotiEmk2eWSlucErH5otnvjW3OSTH82tSg8n8eaYRkVXOY4TzIaLURB2tDaPi0OSZ3Y9G09tx6lxm5erPDtVA%2BX7wT7axXm5Vmmy7ClXDfqe515CCJkQs%2BFIKk8t6KJwzhUwY8iCkVBI54%2FvvzKXruBAQk6GfZM0ZipKxdfqVpylfErlP11uKHypgL2k7iSz8qxFTSV5SU%2FIlT2gjyfl%2FgKN9EDsAHjaY2BgYGaA4DAGRgYQkAHyGMF8NgYrIM3JIAHEEACj8QNOBhYGOyDNAYRMQFpBcZL6ov%2F%2Foaw5%2F%2F%2F%2Ff3kvH8iD2McCxExAO1kYWIE2cjCwAwAgUQwvAAB42mNgZgCD%2F1sZjBiwAAAswgHqAHjaNVFbbxNHGN2JMmtlNnIoZFFx1F2nDoTWgJLIhRQqWlRowyXiUkqE1IZLVW0dJzHYjpAhxnbYi8HXdWxsEKCIi0DdqjxVyhOKkBBS%2FdAX%2FkJfmiCe0Gz4orbjLNFo5uj79B19Z85BXGsLhxAiB7ef%2BFmZGj8XaVb9dgdn%2B5Dd02J%2F2JqFIXtpeQ5Lc6h1YzKbXcN2F%2F2qg373wZ3ly%2Bs5gpCwfpO3d8dnXwyfOheJhC9FgsovsanJ4MCuzw84sN%2BBb1Zh34ADfU7za6fq%2Fyl8Ib7K9E4Eo9HgpHLQu6aL45CB8ug6yqAbKIeyqMAhjjD1nM49596hbqQgHf2B%2Fm5xt3S8sqXlORFe%2FHuSvuD3vesUQ4eVxjgEfm08PWK5%2FoF14lBjDAJvXI0xMRS0%2BMVjbGLIbzV%2BP2y5aOC46IfAb7TzT5cFbSJwEKCc9eXifGgqtOBahN3vWy7aOS76f1zkrVNiaNw1NIpfhyBg8X%2FN428t3v2KJl6KtVqxWpXpCD2Bq5XZW3XPrWv1dMVHEmZy9pr8dhsGdQuhKt%2FTh9Mz6nTCE34Yeyy56byfUHMzqaWrEpRpHldmrpqJrosXPyV0N%2BzAsMJYKzwMwjacTmtXGe9%2B7InkrtPz3aRoaIWPSUEtGjL1wUcYFnoJXeChG7qwpmfUHkI30XsvRdMsmKZMs9TwEsjR67ik6%2Fk14hk4jVcGe4k9yMMojGDNyKiqRy1opi5phUrG7HLDnkfdxOHktZIu072wB9jFhpHReoj3UXNF3lmReb%2FC0eaMx%2BESO1NY1w2myfuMuXW7VKvJ9CQ9im9Wy3XmllpLVX0kWUzNpmW6E%2FrY8ePkjLaV%2FPCMWVTeTJidTYtyuJpuWhSOMYsuwBhMgNK0dCtxS3O7%2Fmtvy7YL9lKn7RfvbODaEerw%2BXfuPfT92WDkiopLpaJZ9pQNUy9JAlNdyjVVH6PDTDV7saB2TadSCVWQYIQeZ2F8QgTVM30zdZtFlcOVSmU1WYFXolFFeRB9Kgt8PJmMx2vJu7IwvZoOS9XRFwsLsXCylKjMyGxXrV5kXxb%2BBxsddR0AAAEAAAAAAAAAAAAA)
    format("woff");
}

.container,
.container-fluid,
.container-lg,
.container-wide,
.container-xl {
  margin: 0 auto;
  padding: 0 20px;
  width: 100%;
}

.container,
.container-lg {
  max-width: 1040px;
}

.container-wide,
.container-xl {
  max-width: 1160px;
}

.common-SuperTitle {
  font-weight: 300;
  font-size: 45px;
  line-height: 60px;
  color: #32325d;
  letter-spacing: -.01em;
}

@media (min-width: 670px) {
  .common-SuperTitle {
    font-size: 50px;
    line-height: 70px;
  }
}

.common-IntroText {
  font-weight: 400;
  font-size: 21px;
  line-height: 31px;
  color: #525f7f;
}

@media (min-width: 670px) {
  .common-IntroText {
    font-size: 24px;
    line-height: 36px;
  }
}

.common-BodyText {
  font-weight: 400;
  font-size: 17px;
  line-height: 26px;
  color: #6b7c93;
}

.common-Link {
  color: #6772e5;
  font-weight: 500;
  transition: color 0.1s ease;
  cursor: pointer;
}

.common-Link:hover {
  color: #32325d;
}

.common-Link:active {
  color: #000;
}

.common-Link--arrow:after {
  font: normal 16px StripeIcons;
  content: "\2192";
  padding-left: 5px;
}

.common-Button {
  white-space: nowrap;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  padding: 0 14px;
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
  background: #fff;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.025em;
  color: #6772e5;
  text-decoration: none;
  transition: all 0.15s ease;
}

.common-Button:hover {
  color: #7795f8;
  transform: translateY(-1px);
  box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}

.common-Button:active {
  color: #555abf;
  background-color: #f6f9fc;
  transform: translateY(1px);
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.common-Button--default {
  color: #fff;
  background: #6772e5;
}

.common-Button--default:hover {
  color: #fff;
  background-color: #7795f8;
}

.common-Button--default:active {
  color: #e6ebf1;
  background-color: #555abf;
}

.common-Button--dark {
  color: #fff;
  background: #32325d;
}

.common-Button--dark:hover {
  color: #fff;
  background-color: #43458b;
}

.common-Button--dark:active {
  color: #e6ebf1;
  background-color: #32325d;
}

.common-Button--disabled {
  color: #fff;
  background: #aab7c4;
  pointer-events: none;
}

.common-ButtonIcon {
  display: inline;
  margin: 0 5px 0 0;
  position: relative;
}

.common-ButtonGroup {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: -10px;
}

.common-ButtonGroup .common-Button {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  margin: 10px;
}

/** Page-specific styles */
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(1turn);
  }
}

@keyframes void-animation-out {
  0%,
  to {
    opacity: 1;
  }
}

body {
  overflow-x: hidden;
  background-color: #f6f9fc;
}

main {
  position: relative;
  display: block;
  z-index: 1;
}

.stripes {
  position: absolute;
  width: 100%;
  transform: skewY(-12deg);
  height: 950px;
  top: -350px;
  background: linear-gradient(180deg, #e6ebf1 350px, rgba(230, 235, 241, 0));
}

.stripes .stripe {
  position: absolute;
  height: 190px;
}

.stripes .s1 {
  height: 380px;
  top: 0;
  left: 0;
  width: 24%;
  background: linear-gradient(90deg, #e6ebf1, rgba(230, 235, 241, 0));
}

.stripes .s2 {
  top: 380px;
  left: 4%;
  width: 35%;
  background: linear-gradient(
    90deg,
    hsla(0, 0%, 100%, 0.65),
    hsla(0, 0%, 100%, 0)
  );
}

.stripes .s3 {
  top: 380px;
  right: 0;
  width: 38%;
  background: linear-gradient(90deg, #e4e9f0, rgba(228, 233, 240, 0));
}

main > .container-lg {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  position: relative;
  max-width: 750px;
  padding: 110px 20px 110px;
}

main > .container-lg .cell {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  -ms-flex: auto;
  flex: auto;
  min-width: 100%;
  min-height: 500px;
  padding: 0 40px;
}

main > .container-lg .cell + .cell {
  margin-top: 70px;
}

main > .container-lg .cell.intro {
  padding: 0;
}

@media (min-width: 670px) {
  main > .container-lg .cell.intro {
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
  }

  .optionList {
    margin-left: 13px;
  }
}

main > .container-lg .cell.intro > * {
  width: 100%;
  max-width: 700px;
}

main > .container-lg .cell.intro .common-IntroText {
  margin-top: 10px;
}

main > .container-lg .cell.intro .common-BodyText {
  margin-top: 15px;
}

main > .container-lg .cell.intro .common-ButtonGroup {
  width: auto;
  margin-top: 20px;
}

main > .container-lg .example {
  -ms-flex-align: center;
  align-items: center;
  border-radius: 4px;
  box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
  padding: 80px 0px;
  margin-left: -20px;
  margin-right: -20px;
}

@media (min-width: 670px) {
  main > .container-lg .example {
    padding: 40px;
  }
}

main > .container-lg .example.submitted form,
main > .container-lg .example.submitting form {
  opacity: 0;
  transform: scale(0.9);
  pointer-events: none;
}

main > .container-lg .example.submitted .success,
main > .container-lg .example.submitting .success {
  pointer-events: all;
}

main > .container-lg .example.submitting .success .icon {
  opacity: 1;
}

main > .container-lg .example.submitted .success > * {
  opacity: 1;
  transform: none !important;
}

main > .container-lg .example.submitted .success > :nth-child(2) {
  transition-delay: 0.1s;
}

main > .container-lg .example.submitted .success > :nth-child(3) {
  transition-delay: 0.2s;
}

main > .container-lg .example.submitted .success > :nth-child(4) {
  transition-delay: 0.3s;
}

main > .container-lg .example.submitted .success .icon .border,
main > .container-lg .example.submitted .success .icon .checkmark {
  opacity: 1;
  stroke-dashoffset: 0 !important;
}

main > .container-lg .example * {
  margin: 0;
  padding: 0;
}

main > .container-lg .example .caption {
  display: flex;
  justify-content: space-between;
  position: absolute;
  width: 100%;
  top: 100%;
  left: 0;
  padding: 15px 10px 0;
  color: #aab7c4;
  font-family: Roboto, "Open Sans", "Segoe UI", sans-serif;
  font-size: 15px;
  font-weight: 500;
}

main > .container-lg .example .caption * {
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
}

main > .container-lg .example .caption .no-charge {
  color: #cfd7df;
  margin-right: 10px;
}

main > .container-lg .example .caption a.source {
  text-align: right;
  color: inherit;
  transition: color 0.1s ease-in-out;
  margin-left: 10px;
}

main > .container-lg .example .caption a.source:hover {
  color: #6772e5;
}

main > .container-lg .example .caption a.source:active {
  color: #43458b;
}

main > .container-lg .example .caption a.source  svg {
  margin-right: 10px;
}

main > .container-lg .example .caption a.source svg path {
  fill: currentColor;
}

main > .container-lg .example form {
  position: relative;
  width: 100%;
  max-width: 500px;
  transition-property: opacity, transform;
  transition-duration: 0.35s;
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}

main > .container-lg .example form input::-webkit-input-placeholder {
  opacity: 1;
}

main > .container-lg .example form input::-moz-placeholder {
  opacity: 1;
}

main > .container-lg .example form input:-ms-input-placeholder {
  opacity: 1;
}

main > .container-lg .example .error {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  position: absolute;
  width: 100%;
  top: 100%;
  margin-top: 20px;
  left: 0;
  padding: 0 15px;
  font-size: 13px !important;
  opacity: 0;
  transform: translateY(10px);
  transition-property: opacity, transform;
  transition-duration: 0.35s;
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}

main > .container-lg .example .error.visible {
  opacity: 1;
  transform: none;
}

main > .container-lg .example .error .message {
  font-size: inherit;
}

main > .container-lg .example .error svg {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  margin-top: -1px;
  margin-right: 10px;
}

main > .container-lg .example .success {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  padding: 10px;
  text-align: center;
  pointer-events: none;
  overflow: hidden;
}

@media (min-width: 670px) {
  main > .container-lg .example .success {
    padding: 40px;
  }
}

main > .container-lg .example .success > * {
  transition-property: opacity, transform;
  transition-duration: 0.35s;
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
  opacity: 0;
  transform: translateY(50px);
}

main > .container-lg .example .success .icon {
  margin: 15px 0 30px;
  transform: translateY(70px) scale(0.75);
}

main > .container-lg .example .success .icon svg {
  will-change: transform;
}

main > .container-lg .example .success .icon .border {
  stroke-dasharray: 251;
  stroke-dashoffset: 62.75;
  transform-origin: 50% 50%;
  transition: stroke-dashoffset 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
  animation: spin 1s linear infinite;
}

main > .container-lg .example .success .icon .checkmark {
  stroke-dasharray: 60;
  stroke-dashoffset: 60;
  transition: stroke-dashoffset 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) 0.35s;
}

main > .container-lg .example .success .title {
  font-size: 17px;
  font-weight: 500;
  margin-bottom: 8px;
}

main > .container-lg .example .success .message {
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 25px;
  line-height: 1.6em;
}

main > .container-lg .example .success .message span {
  font-size: inherit;
}

main > .container-lg .example .success .reset:active {
  transition-duration: 0.15s;
  transition-delay: 0s;
  opacity: 0.65;
}

main > .container-lg .example .success .reset svg {
  will-change: transform;
}

footer {
  position: relative;
  max-width: 750px;
  padding: 50px 20px;
  margin: 0 auto;
}

.optionList {
  margin: 6px 0;
}

.optionList li {
  display: inline-block;
  margin-right: 13px;
}

.optionList a {
  color: #aab7c4;
  transition: color 0.1s ease-in-out;
  cursor: pointer;
  font-size: 15px;
  line-height: 26px;
}

.optionList a.selected {
  color: #6772e5;
  font-weight: 600;
}

.optionList a:hover {
  color: #32325d;
}

.optionList a.selected:hover {
  cursor: default;
  color: #6772e5;
}
.example.example5 {
  background-color: #9169d8;
}

.example.example5 * {
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
}

.example.example5 form {
}

#example5-paymentRequest {
  max-width: 500px;
  width: 100%;
  margin-bottom: 10px;
}

.example.example5 fieldset {
  border: 1px solid #b5a4ed;
  padding: 15px;
  border-radius: 6px;
}

.example.example5 fieldset legend {
  margin: 0 auto;
  padding: 0 10px;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  color: #cdd0f8;
  background-color: #9169d8;
}

.example.example5 fieldset legend + * {
  clear: both;
}

.example.example5 .card-only {
  display: block;
}
.example.example5 .payment-request-available {
  display: none;
}

.example.example5 .row {
  display: -ms-flexbox;
  display: flex;
  margin: 0 0 10px;
}

.example.example5 .field {
  position: relative;
  width: 100%;
}

.example.example5 .field + .field {
  margin-left: 10px;
}

.example.example5 label {
  width: 100%;
  color: #cdd0f8;
  font-size: 13px;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.example.example5 .input {
  width: 100%;
  color: #fff;
  background: transparent;
  padding: 5px 0 6px 0;
  border-bottom: 1px solid #a988ec;
  transition: border-color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.example.example5 .input::-webkit-input-placeholder {
  color: #bfaef6;
}

.example.example5 .input::-moz-placeholder {
  color: #bfaef6;
}

.example.example5 .input:-ms-input-placeholder {
  color: #bfaef6;
}

.example.example5 .input.StripeElement--focus,
.example.example5 .input:focus {
  border-color: #fff;
}
.example.example5 .input.StripeElement--invalid {
  border-color: #ffc7ee;
}

.example.example5 input:-webkit-autofill,
.example.example5 select:-webkit-autofill {
  -webkit-text-fill-color: #fce883;
  transition: background-color 100000000s;
  -webkit-animation: 1ms void-animation-out;
}

.example.example5 .StripeElement--webkit-autofill {
  background: transparent !important;
}

.example.example5 input,
.example.example5 button,
.example.example5 select {
  -webkit-animation: 1ms void-animation-out;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  border-style: none;
  border-radius: 0;
}

.example.example5 select.input,
.example.example5 select:-webkit-autofill {
  background-image: url('data:image/svg+xml;utf8,<svg width="10px" height="5px" viewBox="0 0 10 5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" d="M5.35355339,4.64644661 L9.14644661,0.853553391 L9.14644661,0.853553391 C9.34170876,0.658291245 9.34170876,0.341708755 9.14644661,0.146446609 C9.05267842,0.0526784202 8.92550146,-2.43597394e-17 8.79289322,0 L1.20710678,0 L1.20710678,0 C0.930964406,5.07265313e-17 0.707106781,0.223857625 0.707106781,0.5 C0.707106781,0.632608245 0.759785201,0.759785201 0.853553391,0.853553391 L4.64644661,4.64644661 L4.64644661,4.64644661 C4.84170876,4.84170876 5.15829124,4.84170876 5.35355339,4.64644661 Z" id="shape"></path></svg>');
  background-position: 100%;
  background-size: 10px 5px;
  background-repeat: no-repeat;
  overflow: hidden;
  text-overflow: ellipsis;
  padding-right: 20px;
}

.example.example5 button {
  display: block;
  width: 100%;
  height: 40px;
  margin: 20px 0 0;
  background-color: #fff;
  border-radius: 6px;
  color: #9169d8;
  font-weight: 500;
  cursor: pointer;
}

.example.example5 button:active {
  background-color: #cdd0f8;
}

.example.example5 .error svg .base {
  fill: #fff;
}

.example.example5 .error svg .glyph {
  fill: #9169d8;
}

.example.example5 .error .message {
  color: #fff;
}

.example.example5 .success .icon .border {
  stroke: #bfaef6;
}

.example.example5 .success .icon .checkmark {
  stroke: #fff;
}

.example.example5 .success .title {
  color: #fff;
}

.example.example5 .success .message {
  color: #cdd0f8;
}

.example.example5 .success .reset path {
  fill: #fff;
}
</style>
<style>
/* Overall Container */
.stripe_form * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-text-size-adjust: none;
    box-sizing: border-box;
    font-size: 15px;
    line-height: 1.4em;
    color: #525f7f !important;
}
.stripe_form {
    width: 100%;
    height: 100vh;
    text-align: center;
    transition: width 0.3s ease-in-out;
}
input.field.email-field {
    margin-bottom: 0px;
    font-size: 15px;
}
.stripe_form #main.checkout:not(.success):not(.error) {
    width: calc(100% - 450px);
}
/* Header */

.stripe_form .header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    height: 80px;
    border-bottom: 1px solid #f3f3ff;
}

.stripe_form .header a.shop,
.stripe_form .header a.github {
    margin: 30px;
    font-size: 13px;
    font-weight: 500;
    color: #666ee8;
    letter-spacing: 0.3px;
    text-transform: uppercase;
    text-decoration: none;
}

.stripe_form .header a.github {
    padding-left: 20px;
}

.stripe_form .header a:hover {
    text-decoration: underline;
}

/* Checkout */

.stripe_form #checkout {
    max-width: 480px;
    margin: 0 auto;
    padding: 0px 0px;
    transition: visibility 0s, opacity 0.5s linear 0.5s;
}

.stripe_form #main.checkout #checkout {
    visibility: visible;
    opacity: 1;
}

.stripe_form section {
    display: flex;
    flex-direction: column;
    position: relative;
    text-align: left;
}

.stripe_form h1 {
    margin: 0 0 20px 0;
    font-size: 20px;
    font-weight: 500;
}

.stripe_form h2 {
    margin: 15px 0;
    color: #32325d;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    font-size: 13px;
    font-weight: 500;
}

/* Payment Request */

.stripe_form #payment-request {
    visibility: hidden;
    opacity: 0;
    min-height: 100px;
    padding: 20px 0;
    transition: visibility 0s, opacity 0.3s ease-in;
}

.stripe_form #payment-request.visible {
    visibility: visible;
    opacity: 1;
}

.stripe_form #payment-form {
    margin: 0 -30px;
    padding: 0px 30px;
    border-radius: 4px;
}

.payment-info.card.visible {
    border: none !important;
}

.payment-info.card.visible label{
    margin: 0 !important;
}

#checkout .logo button {
    font-size: 25px !important;
    position: absolute;
    top: -10px;
    right: -20px;
}

#checkout .logo img {
    margin: auto;
    width: 100px;
    position: relative; 
    top: -10px
}

.image-block img {
    width: 420px;
    margin-top: 16px;
}

/* Form */

.stripe_form fieldset {
    margin-bottom: 20px;
    background: #fff;
    box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15),
        0 4px 6px 0 rgba(112, 157, 199, 0.15);
    border-radius: 4px;
    border: none;
    font-size: 0;
}

.stripe_form fieldset label {
    position: relative;
    display: flex;
    flex-direction: row;
    height: 42px;
    padding: 10px 0;
    align-items: center;
    justify-content: center;
    color: #8898aa;
    font-weight: 400;
}

.stripe_form fieldset label:not(:last-child) {
    border-bottom: 1px solid #f0f5fa;
}

.stripe_form fieldset label.state {
    display: inline-flex;
    width: 100%;
}

.stripe_form fieldset:not(.with-state) label.state {
    display: none;
}

.stripe_form fieldset label.zip {
    display: inline-flex;
    width: 100%;
    padding-right: 60px;
}

.stripe_form fieldset:not(.with-state) label.zip {
    width: 100%;
}

.stripe_form fieldset label span {
    min-width: 125px;
    padding: 0 15px;
    text-align: right;
    font-size: 15px;
}

.stripe_form fieldset .redirect label span {
    width: 100%;
    text-align: center;
}

.stripe_form p.instruction {
    display: inline-table;
    margin-top: -32px;
    padding: 0 5px;
    text-align: center;
    background: #f8fbfd;
}

.stripe_form p.tip {
    margin: -10px auto 10px;
    padding: 5px 0 5px 30px;
    font-size: 14px;
    background: url('../../image/tip.svg') left center no-repeat;
	letter-spacing: normal;
}

.stripe_form span#generate {
    cursor: pointer;
    color: #525f7f;
    text-decoration: underline;
}

.stripe_form span#generate:hover {
    text-decoration: none;
}

.stripe_form .field {
    flex: 1;
    padding: 0 15px;
    background: transparent;
    font-weight: 400;
    color: #31325f;
    outline: none;
    cursor: text;
}

.stripe_form .field::-webkit-input-placeholder {
    color: #aab7c4;
}

.stripe_form .field::-moz-placeholder {
    color: #aab7c4;
}

.stripe_form .field:-ms-input-placeholder {
    color: #aab7c4;
}

.stripe_form fieldset .select::after {
    content: '';
    position: absolute;
    width: 9px;
    height: 5px;
    right: 20px;
    top: 50%;
    margin-top: -2px;
    background-image: url('../../image/dropdown.svg');
    pointer-events: none;
}

.stripe_form input {
    flex: 1;
    border-style: none;
    outline: none;
    color: #313b3f;
}

.stripe_form select {
    flex: 1;
    border-style: none;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    color: #313b3f;
    cursor: pointer;
    background: transparent;
}

.stripe_form select:focus {
    color: #666ee8;
}

::-webkit-input-placeholder {
    color: #cfd7e0;
}

::-moz-placeholder {
    color: #cfd7e0;
    opacity: 1;
}

:-ms-input-placeholder {
    color: #cfd7e0;
}

.stripe_form input:-webkit-autofill,
select:-webkit-autofill {
    -webkit-text-fill-color: #666ee8;
    transition: background-color 100000000s;
    -webkit-animation: 1ms void-animation-out 1s;
}

.stripe_form .StripeElement--webkit-autofill {
    background: transparent !important;
}

.stripe_form #card-element {
    margin-top: -1px;
}

.stripe_form #ideal-bank-element {
    padding: 0;
}

.stripe_form button.payment-button {
    display: block;
    background: #279e88;
    color: #fff !important;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    border-radius: 4px;
    border: 0;
    font-weight: 700;
    width: 100%;
    height: 40px;
    outline: none;
    cursor: pointer;
    transition: all 0.15s ease;
}

.stripe_form button.payment-button:focus {
    background: #555abf;
}

.stripe_form button.payment-button:hover {
    transform: translateY(-1px);
    box-shadow: 0 7px 14px 0 rgba(50, 50, 93, 0.1),
        0 3px 6px 0 rgba(0, 0, 0, 0.08);
}

.stripe_form button.payment-button:active {
    background: #43458b;
}

.stripe_form #country {
    display: flex;
    align-items: center;
}

.stripe_form #country select {
    margin: 0 -15px 0 -30px;
    padding: 0 15px 0 30px;
}

.stripe_form #country::before {
    display: inline-flex;
    content: '';
    width: 21px;
    height: 15px;
    background: url('../../image/flags.svg');
    background-position: -1000px -1000px;
    background-repeat: no-repeat;
    margin-right: 10px;
}

#country.ad::before {
    background-position: -10px -10px;
}

#country.ae::before {
    background-position: -41px -10px;
}

#country.ag::before {
    background-position: -72px -10px;
}

#country.am::before {
    background-position: -103px -10px;
}

#country.ar::before {
    background-position: -134px -10px;
}

#country.at::before {
    background-position: -165px -10px;
}

#country.au::before {
    background-position: -196px -10px;
}

#country.be::before {
    background-position: -227px -10px;
}

#country.bf::before {
    background-position: -258px -10px;
}

#country.bg::before {
    background-position: -289px -10px;
}

#country.bo::before {
    background-position: -320px -10px;
}

#country.br::before {
    background-position: -351px -10px;
}

#country.ca::before {
    background-position: -382px -10px;
}

#country.cd::before {
    background-position: -413px -10px;
}

#country.cg::before {
    background-position: -444px -10px;
}

#country.ch::before {
    background-position: -475px -10px;
}

#country.cl::before {
    background-position: -506px -10px;
}

#country.cm::before {
    background-position: -10px -35px;
}

#country.cn::before {
    background-position: -41px -35px;
}

#country.co::before {
    background-position: -72px -35px;
}

#country.cr::before {
    background-position: -103px -35px;
}

#country.cz::before {
    background-position: -134px -35px;
}

#country.de::before {
    background-position: -165px -35px;
}

#country.dj::before {
    background-position: -196px -35px;
}

#country.dk::before {
    background-position: -227px -35px;
}

#country.dz::before {
    background-position: -258px -35px;
}

#country.ec::before {
    background-position: -289px -35px;
}

#country.ee::before {
    background-position: -320px -35px;
}

#country.eg::before {
    background-position: -351px -35px;
}

#country.es::before {
    background-position: -382px -35px;
}

#country.eu::before {
    background-position: -413px -35px;
}

#country.fi::before {
    background-position: -444px -35px;
}

#country.fo::before {
    background-position: -475px -35px;
}

#country.fr::before {
    background-position: -506px -35px;
}

#country.ga::before {
    background-position: -10px -60px;
}

#country.gb::before {
    background-position: -41px -60px;
}

#country.gl::before {
    background-position: -72px -60px;
}

#country.gm::before {
    background-position: -103px -60px;
}

#country.gr::before {
    background-position: -134px -60px;
}

#country.gt::before {
    background-position: -165px -60px;
}

#country.gu::before {
    background-position: -196px -60px;
}

#country.hk::before {
    background-position: -227px -60px;
}

#country.hn::before {
    background-position: -258px -60px;
}

#country.ht::before {
    background-position: -289px -60px;
}

#country.hu::before {
    background-position: -320px -60px;
}

#country.id::before {
    background-position: -351px -60px;
}

#country.ie::before {
    background-position: -382px -60px;
}

#country.il::before {
    background-position: -413px -60px;
}

#country.im::before {
    background-position: -444px -60px;
}

#country.in::before {
    background-position: -475px -60px;
}

#country.iq::before {
    background-position: -506px -60px;
}

#country.ir::before {
    background-position: -10px -85px;
}

#country.is::before {
    background-position: -41px -85px;
}

#country.it::before {
    background-position: -72px -85px;
}

#country.je::before {
    background-position: -103px -85px;
}

#country.jm::before {
    background-position: -134px -85px;
}

#country.jo::before {
    background-position: -165px -85px;
}

#country.jp::before {
    background-position: -196px -85px;
}

#country.kg::before {
    background-position: -227px -85px;
}

#country.kn::before {
    background-position: -258px -85px;
}

#country.kp::before {
    background-position: -289px -85px;
}

#country.kr::before {
    background-position: -320px -85px;
}

#country.kw::before {
    background-position: -351px -85px;
}

#country.kz::before {
    background-position: -382px -85px;
}

#country.la::before {
    background-position: -413px -85px;
}

#country.lb::before {
    background-position: -444px -85px;
}

#country.lc::before {
    background-position: -475px -85px;
}

#country.ls::before {
    background-position: -506px -85px;
}

#country.lt::before {
    background-position: -10px -110px;
}

#country.lu::before {
    background-position: -41px -110px;
}

#country.lv::before {
    background-position: -72px -110px;
}

#country.ma::before {
    background-position: -103px -110px;
}

#country.mg::before {
    background-position: -134px -110px;
}

#country.mk::before {
    background-position: -165px -110px;
}

#country.ml::before {
    background-position: -196px -110px;
}

#country.mm::before {
    background-position: -227px -110px;
}

#country.mt::before {
    background-position: -258px -110px;
}

#country.mx::before {
    background-position: -289px -110px;
}

#country.my::before {
    background-position: -320px -110px;
}

#country.na::before {
    background-position: -351px -110px;
}

#country.ne::before {
    background-position: -382px -110px;
}

#country.ng::before {
    background-position: -413px -110px;
}

#country.ni::before {
    background-position: -444px -110px;
}

#country.nl::before {
    background-position: -475px -110px;
}

#country.no::before {
    background-position: -506px -110px;
}

#country.nz::before {
    background-position: -10px -135px;
}

#country.om::before {
    background-position: -41px -135px;
}

#country.pa::before {
    background-position: -72px -135px;
}

#country.pe::before {
    background-position: -103px -135px;
}

#country.pg::before {
    background-position: -134px -135px;
}

#country.ph::before {
    background-position: -165px -135px;
}

#country.pk::before {
    background-position: -196px -135px;
}

#country.pl::before {
    background-position: -227px -135px;
}

#country.pr::before {
    background-position: -258px -135px;
}

#country.ps::before {
    background-position: -289px -135px;
}

#country.pt::before {
    background-position: -320px -135px;
}

#country.py::before {
    background-position: -351px -135px;
}

#country.qa::before {
    background-position: -382px -135px;
}

#country.ro::before {
    background-position: -444px -135px;
}

#country.ru::before {
    background-position: -475px -135px;
}

#country.rw::before {
    background-position: -506px -135px;
}

#country.sa::before {
    background-position: -10px -160px;
}

#country.se::before {
    background-position: -41px -160px;
}

#country.sg::before {
    background-position: -72px -160px;
}

#country.si::before {
    background-position: -103px -160px;
}

#country.sk::before {
    background-position: -134px -160px;
}

#country.sl::before {
    background-position: -165px -160px;
}

#country.sn::before {
    background-position: -196px -160px;
}

#country.so::before {
    background-position: -227px -160px;
}

#country.sv::before {
    background-position: -258px -160px;
}

#country.td::before {
    background-position: -289px -160px;
}

#country.th::before {
    background-position: -320px -160px;
}

#country.tj::before {
    background-position: -351px -160px;
}

#country.tl::before {
    background-position: -382px -160px;
}

#country.tr::before {
    background-position: -413px -160px;
}

#country.tw::before {
    background-position: -444px -160px;
}

#country.tz::before {
    background-position: -475px -160px;
}

#country.ua::before {
    background-position: -506px -160px;
}

#country.us::before {
    background-position: -10px -185px;
}

#country.uy::before {
    background-position: -41px -185px;
}

#country.ve::before {
    background-position: -72px -185px;
}

#country.vn::before {
    background-position: -103px -185px;
}

#country.xx::before {
    background-position: -134px -185px;
}

#country.ye::before {
    background-position: -165px -185px;
}

#country.za::before {
    background-position: -196px -185px;
}

/* Payment Methods */

.stripe_form #payment-methods {
    margin: 0 0 20px;
    border-bottom: 2px solid #e8e8fb;
}

.stripe_form #payment-methods li {
    display: none;
}

.stripe_form #payment-methods li.visible {
    display: inline-block;
    margin: 0 20px 0 0;
    list-style: none;
}

.stripe_form #payment-methods input {
    display: none;
}

.stripe_form #payment-methods label {
    display: flex;
    flex: 1;
    cursor: pointer;
}

.stripe_form #payment-methods input+label {
    position: relative;
    padding: 5px 0;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 13px;
}

.stripe_form #payment-methods label::before {
    content: '';
    position: absolute;
    width: 100%;
    bottom: -2px;
    left: 0;
    border-bottom: 2px solid #6772e5;
    opacity: 0;
    transform: scaleX(0);
    transition: all 0.25s ease-in-out;
}

.stripe_form #payment-methods label:hover {
    color: #6772e5;
    cursor: pointer;
}

.stripe_form #payment-methods input:checked+label {
    color: #6772e5;
}

.stripe_form #payment-methods label:hover::before,
.stripe_form #payment-methods input:checked+label::before {
    opacity: 1;
    transform: scaleX(1);
}

.stripe_form #payment-methods,
.payment-info {
    display: none;
}

.stripe_form .payment-info:not(.card) {
    margin-bottom: 15px;
}

.stripe_form .payment-info.ideal {
    margin-bottom: 0;
}

.stripe_form #payment-methods.visible,
.stripe_form .payment-info.visible {
    display: block;
}

.stripe_form .payment-info.card.visible,
.stripe_form .payment-info.sepa_debit.visible {
    text-align: center;
}

.stripe_form .payment-info p.notice {
    font-size: 14px;
    color: #8898aa;
    text-align: left;
}

.stripe_form #wechat-qrcode img {
    margin: 0 auto;
}

.stripe_form .element-errors {
    display: inline-flex;
    height: 20px;
    margin: 15px auto 0;
    padding-left: 20px;
    color: #e25950;
    opacity: 0;
    transform: translateY(10px);
    transition-property: opacity, transform;
    transition-duration: 0.35s;
    transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
    background-size: 15px 15px;
}

.stripe_form .element-errors.visible {
    opacity: 1;
    transform: none;
}

.stripe_form #iban-errors {
    margin-top: -20px;
}

/* Order Summary */

.stripe_form #summary {
    position: fixed;
    top: 0;
    right: -450px;
    bottom: 0;
    width: 450px;
    overflow: auto;
    height: 100%;
    background: #fff;
    box-shadow: 0 2px 19px 4px rgba(0, 0, 0, 0.04);
    transition: right 0.3s ease-in-out;
}

.stripe_form #main.checkout:not(.success):not(.error)+#summary {
    right: 0;
}

.stripe_form #summary .header {
    background: #fff;
}

.stripe_form #summary h1 {
    margin: 0 30px;
    line-height: 80px;
    font-weight: 400;
}

.stripe_form #summary p {
    font-size: 16px;
    font-weight: 400;
    margin-top: 10px;
}

.stripe_form #summary .discount p {
    margin-top: 0;
}

.stripe_form #summary .line-item {
    display: flex;
    flex-direction: row;
    padding: 30px 30px 0 30px;
}

.stripe_form #summary .line-item .image {
    display: block;
    width: 80px;
    height: 80px;
    margin-right: 15px;
    background: #f6f9fc;
    border-radius: 3px;
}

.stripe_form #summary .line-item .label {
    flex: 1;
    text-align: left;
}

.stripe_form #summary .line-item .product {
    color: #424770;
}

.stripe_form #summary .line-item .sku {
    font-size: 14px;
    color: #8898aa;
}

.stripe_form #summary .line-item .count,
.stripe_form #summary .line-item .price {
    font-size: 14px;
    padding-left: 10px;
    align-self: right;
    text-align: right;
    line-height: 24px;
}

.stripe_form #summary .line-item .count {
    color: #8898aa;
}

.stripe_form #summary .line-item .price {
    color: #8ba4fe;
    font-weight: bold;
}

.stripe_form #summary .line-item.subtotal {
    margin-top: 30px;
    margin-bottom: 0;
    padding-top: 10px;
    border-top: 1px solid #f3f3ff;
}

.stripe_form #summary .line-item.shipping {
    padding-top: 0;
}

.stripe_form #summary .line-item.total {
    margin-top: 15px;
    margin-bottom: 30px;
    padding-top: 15px;
    font-size: 21px;
    border-top: 1px solid #f3f3ff;
}

.stripe_form #summary .line-item.total .label,
.stripe_form #summary .line-item.total .price {
    color: #424770;
    font-size: 24px;
    font-weight: 400;
    line-height: inherit;
}

.stripe_form #demo {
    padding: 15px;
    margin: -15px -15px 0;
    background: #f6f9fc;
    border-radius: 5px;
}

.stripe_form #demo p.label {
    margin: 0 0 10px;
    color: #666ee8;
}

.stripe_form #demo .note {
    display: block;
    margin: 10px 0 0;
    font-size: 14px;
}

.stripe_form #demo p.note a,
.stripe_form #demo p.note em {
    font-size: 14px;
}

.stripe_form #demo p.note a:hover {
    text-decoration: none;
}

.stripe_form .card-number {
    padding-left: 8px;
    white-space: nowrap;
    font-family: Source Code Pro, monospace;
    color: #0d2b3e;
    font-weight: 500;
}

.stripe_form .card-number span {
    display: inline-block;
    width: 8px;
}

/* Order Confirmation */

.stripe_form #confirmation {
    display: flex;
    align-items: center;
    position: absolute;
    top: 80px;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    visibility: hidden;
    overflow-x: hidden;
    opacity: 0;
    background: #f8fbfd;
    text-align: left;
    transition: visibility 0s, opacity 0.5s linear 0.5s;
}

.stripe_form #main.success #confirmation,
.stripe_form #main.error #confirmation {
    visibility: visible;
    opacity: 1;
}

.stripe_form #main.success #order,
.stripe_form #main.error #order {
    visibility: hidden;
    opacity: 0;
}

.stripe_form #confirmation h1 {
    font-size: 42px;
    font-weight: 300;
    color: #6863d8;
    letter-spacing: 0.3px;
    margin-bottom: 30px;
}

.stripe_form #confirmation .status {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 75px 0 275px;
    max-width: 75%;
    height: 350px;
    margin: 100px auto;
    box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15);
    border-radius: 6px;
}

.stripe_form #confirmation .status.error {
    display: none;
}

.stripe_form #confirmation .status p {
    margin: 0 0 15px;
}

.stripe_form #confirmation .status li {
    margin-bottom: 5px;
    list-style: none;
}

.stripe_form #main.success:not(.processing) #confirmation .status.processing,
.stripe_form #main.success:not(.receiver) #confirmation .status.receiver {
    display: none;
}

.stripe_form #main.processing #confirmation .status.success,
.stripe_form #main.receiver #confirmation .status.success {
    display: none;
}

.stripe_form #main.error #confirmation .status.success,
.stripe_form #main.error #confirmation .status.processing,
.stripe_form #main.error #confirmation .status.receiver {
    display: none;
}

.stripe_form #main.error #confirmation .status.error {
    display: flex;
}

.stripe_form #main.error #confirmation .error-message {
    font-family: monospace;
}

/* Media Queries */

@media only screen and (max-width: 1024px) {
    .stripe_form #main.checkout:not(.success):not(.error) {
        width: calc(100% - 320px);
    }

    .stripe_form #summary {
        width: 320px;
        right: -320px;
    }

    .stripe_form #main.checkout:not(.success):not(.error)+#summary {
        right: 0;
    }

    .stripe_form #summary .line-item p {
        margin-top: 0;
    }

    .stripe_form #summary .line-item .image {
        width: 40px;
        height: 40px;
    }

    .stripe_form #summary .line-item .label {
        margin: 0;
    }
}

@media only screen and (max-width: 800px) {
    .stripe_form #main.checkout:not(.success):not(.error) {
        width: 100%;
    }

    .stripe_form #payment-request {
        padding-top: 0;
        min-height: 80px;
    }

    .stripe_form #summary {
        display: none;
    }

    .stripe_form #confirmation .status {
        width: auto;
        height: auto;
        margin: 30px;
    }
}

@media only screen and (max-width: 500px) {
    .stripe_form .header {
        height: 60px;
        background-size: 40px 40px;
    }

    .stripe_form .header a.shop,
    .stripe_form .header a.github {
        display: none;
    }

    .stripe_form #payment-request {
        min-height: 0;
        padding-right: 15px;
        padding-left: 15px;
    }

    .stripe_form #payment-form {
        margin: 0;
        padding: 0 15px;
        border-width: 2px 0 0 0;
        border-radius: 0;
    }

    .stripe_form .payment-info span {
        display: none;
    }

    .stripe_form fieldset {
        margin-bottom: 15px;
    }

    .stripe_form fieldset label.state,
    .stripe_form fieldset label.zip {
        display: flex;
        width: inherit;
        padding: 10px 0;
    }

    .stripe_form p.instruction {
        margin-top: -12px;
        font-size: 14px;
    }

    .stripe_form p.tip {
        margin-bottom: 0;
        font-size: 13px;
    }

    .stripe_form #country::before {
        display: none;
    }

    .stripe_form #checkout {
        margin-bottom: 0;
    }

    .stripe_form #confirmation .status {
        width: auto;
        height: auto;
        padding: 120px 15px 15px;
        background-size: 68px 86px;
        box-shadow: 0 1px 3px 0 rgba(50, 50, 93, 0.15);
        border-radius: 6px;
    }

    .stripe_form #confirmation h1 {
        text-align: center;
    }
}
</style>
<div class="globalContent">
    <main>
    <section class="container-lg">
<div class="cell example example5" id="example-5">
<form action="{{ url('/stripe/enroll')}}" method="post" id="payment-form">
   
        @csrf
          <div id="example5-paymentRequest">
            <!--Stripe paymentRequestButton Element inserted here-->
          </div>
          <fieldset>
            <legend class="card-only" data-tid="elements_examples.form.pay_with_card">Pay with card</legend>
            <legend class="payment-request-available" data-tid="elements_examples.form.enter_card_manually">Or enter card details</legend>
            <div class="row">
              <div class="field">
                <label for="example5-name" data-tid="elements_examples.form.name_label">Name</label>
                <input id="example5-name" name='name' data-tid="elements_examples.form.name_placeholder" class="input" type="text" placeholder="Jane Doe" required="" autocomplete="name">
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-email" data-tid="elements_examples.form.email_label">Email</label>
                <input id="example5-email" name="email" data-tid="elements_examples.form.email_placeholder" class="input" type="text" placeholder="janedoe@gmail.com" required="" autocomplete="email">
              </div>
              <div class="field">
                <label for="example5-phone" data-tid="elements_examples.form.phone_label">Phone</label>
                <input id="example5-phone" name="phone" data-tid="elements_examples.form.phone_placeholder" class="input" type="text" placeholder="(941) 555-0123" required="" autocomplete="tel">
              </div>
            </div>
            <div data-locale-reversible>
              <div class="row">
                <div class="field">
                  <label for="example5-address" data-tid="elements_examples.form.address_label">Address</label>
                  <input id="example5-address" name="address_line1" data-tid="elements_examples.form.address_placeholder" class="input" type="text" placeholder="185 Berry St" required="" autocomplete="address-line1">
                </div>
              </div>
              <div class="row" data-locale-reversible>
                <div class="field">
                  <label for="example5-city" data-tid="elements_examples.form.city_label">City</label>
                  <input id="example5-city" name="address_city" data-tid="elements_examples.form.city_placeholder" class="input" type="text" placeholder="San Francisco" required="" autocomplete="address-level2">
                </div>
                <div class="field">
                  <label for="example5-state" data-tid="elements_examples.form.state_label">State</label>
                  <input id="example5-state" name="address_state" data-tid="elements_examples.form.state_placeholder" class="input empty" type="text" placeholder="CA" required="" autocomplete="address-level1">
                </div>
                <div class="field">
                  <label for="example5-zip" data-tid="elements_examples.form.postal_code_label">ZIP</label>
                  <input id="example5-zip" name="address_zip" data-tid="elements_examples.form.postal_code_placeholder" class="input empty" type="text" placeholder="94107" required="" autocomplete="postal-code">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="field">
                <label for="example5-card" data-tid="elements_examples.form.card_label">Card</label>
                <div id="example5-card" class="input"></div>
                <div id="card-element">
                </div>
              </div>
            </div>
            <button type="submit" data-tid="elements_examples.form.pay_button">Pay</button>
          </fieldset>
          <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
              <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
              <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
            </svg>
            <span class="message"></span></div>
            <div id="card-errors"></div>
          
        </form>
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message">Token: </span><span class="token"></span></p>
          <a class="reset" href="#">
            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
            </svg>
          </a>
        </div>

      </div>
      </section>
    </main>
  </div>
  <button tabindex="0" id="submit" type="button" class="Button Button--payment" data-toggle="modal"  data-target="#myModal_payment"><i class="fa fa-credit-card active"></i>
            <div class="total_payment"><span>Order LogoSignature® for</span>
                <span id="show_total" data-value="119.94" data-plan_id="6">$119.94</span>
            </div>
        </button>

  <div id="myModal_payment" class="modal fade stripe_form show" aria-modal="true">
  <div class="modal-dialog">
  <div class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <div id="checkout">
                <fieldset class="with-state">
                                <label>
                                    <span>Name</span>
                                    <input id="example5-name" name='name' data-tid="elements_examples.form.name_placeholder" class="input" type="text" placeholder="Jane Doe" required="" autocomplete="name">
                                </label>
                                <label>
                                    <span>Email</span>
                                    <input id="example5-email" name="email" data-tid="elements_examples.form.email_placeholder" class="input" type="text" placeholder="janedoe@gmail.com" required="" autocomplete="email">
                                </label>
                                <label>
                                    <span>Address</span>
                                    <input id="example5-address" name="address_line1" data-tid="elements_examples.form.address_placeholder" class="input" type="text" placeholder="185 Berry St" required="" autocomplete="address-line1">
                                </label>
                                <label class="city">
                                    <span>City</span>
                                    <input id="example5-city" name="address_city" data-tid="elements_examples.form.city_placeholder" class="input" type="text" placeholder="San Francisco" required="" autocomplete="address-level2">
                                </label>
                                <label class="state">
                                    <span>State</span>
                                    <input id="example5-state" name="address_state" data-tid="elements_examples.form.state_placeholder" class="input empty" type="text" placeholder="CA" required="" autocomplete="address-level1">
                                </label>
                                <label class="zip">
                                    <span>ZIP</span>
                                    <input id="example5-zip" name="address_zip" data-tid="elements_examples.form.postal_code_placeholder" class="input empty" type="text" placeholder="94107" required="" autocomplete="postal-code">
                                </label>
                                <label class="select">
                                    <span>Country</span>
                                    <div id="country" class="field fr">
                                        <select name="country" required="">
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BR">Brazil</option>
                                            <option value="CA">Canada</option>
                                            <option value="CN">China</option>
                                            <option value="DK">Denmark</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MX">Mexico</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NO">Norway</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="SG">Singapore</option>
                                            <option value="ES">Spain</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US" selected="selected">United States</option>
                                        </select>
                                    </div>
                                </label>
                            </fieldset>
                            <nav id="payment-methods">
                                <ul>
                                    <li>
                                        <input type="radio" name="payment" id="payment-card" value="card" checked="">
                                        <label for="payment-card">Card</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-ach_credit_transfer" value="ach_credit_transfer" checked="">
                                        <label for="payment-ach_credit_transfer">Bank Transfer</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-alipay" value="alipay">
                                        <label for="payment-alipay">Alipay</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-bancontact" value="bancontact">
                                        <label for="payment-bancontact">Bancontact</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-eps" value="eps">
                                        <label for="payment-eps">EPS</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-ideal" value="ideal">
                                        <label for="payment-ideal">iDEAL</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-giropay" value="giropay">
                                        <label for="payment-giropay">Giropay</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-multibanco" value="multibanco">
                                        <label for="payment-multibanco">Multibanco</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-p24" value="p24">
                                        <label for="payment-p24">Przelewy24</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-sepa_debit" value="sepa_debit">
                                        <label for="payment-sepa_debit">SEPA Direct Debit</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-sofort" value="sofort">
                                        <label for="payment-sofort">SOFORT</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment" id="payment-wechat" value="wechat">
                                        <label for="payment-wechat">WeChat Pay</label>
                                    </li>
                                </ul>
                            </nav>
                            <div class="payment-info card visible">
                                <fieldset>
                                    <label>
                                        <span>Card</span>
                                        <div id="example5-card" class="input"></div>
                        <div id="card-element">
                        </div>                                    </label>
                                </fieldset>
                            </div>
                            <div class="payment-info sepa_debit">
                                <fieldset>
                                    <label>
                                        <span>IBAN</span>
                                        <div id="iban-element" class="field"></div>
                                    </label>
                                </fieldset>
                                <p class="notice">By providing your IBAN and confirming this payment, youre authorizing
                                    Payments Demo and Stripe, our payment
                                    provider, to send instructions to your bank to debit your account. Youre entitled to a
                                    refund under the terms
                                    and conditions of your agreement with your bank.</p>
                            </div>
                            <div class="payment-info ideal">
                                <fieldset>
                                    <label>
                                        <span>iDEAL Bank</span>
                                        <div id="ideal-bank-element" class="field"></div>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="payment-info redirect">
                                <p class="notice">Youll be redirected to the banking site to complete your payment.</p>
                            </div>
                            <div class="payment-info receiver">
                                <p class="notice">Payment information will be provided after you place the order.</p>
                            </div>
                            <div class="payment-info wechat">
                                <div id="wechat-qrcode"></div>
                                <p class="notice">Click the button below to generate a QR code for WeChat.</p>
                            </div>
                        </section>

                        <input type="hidden" id="checkboxOneTimeOfferStatus" value="0">
                        <input type="hidden" id="checkboxOneTimeOfferAmount" value="0">
                        <input type="hidden" id="checkboxOneTimeOfferText" value="">
                        <div class="offer_sec">
                        <div class="chiller_cb">
                           <i class="fa fa-long-arrow-right d-none d-sm-block" aria-hidden="true"></i>
                           <input id="myCheckboxOneTimeOffer" type="checkbox" name="advance_feature" value="29.95">
                           <label for="myCheckbox">Yes, Upgrade Me To The Platinum Edition.</label>
                        </div>
                        
                        <div class="offer_txt">
                           <span><span class="ox">One Time Offer</span><span class="ox2">: </span>You Get 2 Unique LogoSignature® Designs made by our VIP designer group with unlimited revisions, all source files and all ready to use Hi-Res + Lo+Res PNGs. Check yes to add this to your order for just $29.95 (this offer is not available at any other time or place)</span>
                        </div>
                     </div>
             <button class="payment-button" id="customer_payment" type="submit" data-tid="elements_examples.form.pay_button" modal-dismiss="modal">PAY ($119.94)</button>
            
                        <div class="PaymentButton__subtext" style="margin-top:2px">All Prices Are in USD</div>
                        
                        <div class="image-block">
                            <img src="https://www.logosignature.co/assets/img/sicons.png" alt="">
                        </div>
						<div class="bottom_info">
							<span id="bottom_info_btn" class="bottom_info_btn">Your Logo Details
								<span id="right_btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
								<span id="down_btn" style="display: none"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
							</span>                                
							<div class="PaymentPopup__content__step-1__logo-details" style="display: none">
								<div class="PaymentPopup__content__step-1__logo-details__editing-toggle ">
									<span id="edit_btn"><i class="fa fa-pencil-square-o"></i></span>
									<span id="check_btn" style="display: none"><i class="fa fa-check-square-o"></i></span>
								</div>
								<div class="PaymentPopup__content__step-1__logo-details__label">Signature Text</div>
								<input type="text" data-lpignore="true" required="" class="signature_input inputDisabled PaymentPopup__content__step-1__logo-details__input" name="signature" value="test" disabled="">
								<div class="PaymentPopup__content__step-1__logo-details__label">Undertag</div>
								<input placeholder="None" type="text" disabled="" data-lpignore="true" required="" class="undertag_input inputDisabled PaymentPopup__content__step-1__logo-details__input" name="comments1" value="Aquatec">
								<div class="PaymentPopup__content__step-1__logo-details__label">Notes</div>
								<input placeholder="None" type="text" disabled="" data-lpignore="true" required="" class="notes_input inputDisabled PaymentPopup__content__step-1__logo-details__input" name="comments2" value="">                                    
							</div>                                                            
						</div>
          </form>
                </div>
                <div id="confirmation">
                    <div class="status processing">
                        <h1>Completing your order</h1>
                        <p>Were just waiting for the confirmation from your bank This might take a moment but feel free to
                            close this page.</p>
                        <p>Well send your receipt via email shortly.</p>
                    </div>
                    <div class="status success">
                        <h1>Thanks for your order!</h1>
                        <p>Woot! You successfully made a payment with Stripe.</p>
                        <p class="note">We just sent your receipt to your email address, and your items will be on their way
                            shortly.</p>
                    </div>
                    <div class="status receiver">
                        <h1>Thanks! One last step!</h1>
                        <p>Please make a payment using the details below to complete your order.</p>
                        <div class="info"></div>
                    </div>
                    <div class="status error">
                        <h1>Oops, payment failed.</h1>
                        <p>It looks like your order could not be paid at this time. Please try again or select a different
                            payment option.</p>
                        <p class="error-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
<!-- The needed JS files -->
<!-- JQUERY File -->
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>
<!-- Your JS File -->
<script>
// Stripe API Key
var stripekey="{{env('STRIPE_KEY')}}";
var stripe = Stripe(stripekey);

function registerElements(elements, exampleName) {
  var formClass = '.' + exampleName;
  var example = document.querySelector(formClass);

  var form = example.querySelector('form');
  var resetButton = example.querySelector('a.reset');
  var error = form.querySelector('.error');
  var errorMessage = error.querySelector('.message');

  function enableInputs() {
    Array.prototype.forEach.call(
      form.querySelectorAll(
        "input[type='hidden'], input[type='text'], input[type='email'], input[type='tel']"
      ),
      function(input) {
        input.removeAttribute('disabled');
      }
    );
  }

  function disableInputs() {
    Array.prototype.forEach.call(
      form.querySelectorAll(
        "input[type='text'], input[type='email'], input[type='tel']"
      ),
      function(input) {
        input.setAttribute('disabled', 'true');
      }
    );
  }

  function triggerBrowserValidation() {
    // The only way to trigger HTML5 form validation UI is to fake a user submit
    // event.
    var submit = document.createElement('input');
    submit.type = 'submit';
    submit.style.display = 'none';
    form.appendChild(submit);
    submit.click();
    submit.remove();
  }

  // Listen for errors from each Element, and show error messages in the UI.
  var savedErrors = {};
  elements.forEach(function(element, idx) {
    element.on('change', function(event) {
      if (event.error) {
        error.classList.add('visible');
        savedErrors[idx] = event.error.message;
        errorMessage.innerText = event.error.message;
      } else {
        savedErrors[idx] = null;

        // Loop over the saved errors and find the first one, if any.
        var nextError = Object.keys(savedErrors)
          .sort()
          .reduce(function(maybeFoundError, key) {
            return maybeFoundError || savedErrors[key];
          }, null);

        if (nextError) {
          // Now that they've fixed the current error, show another one.
          errorMessage.innerText = nextError;
        } else {
          // The user fixed the last error; no more errors.
          error.classList.remove('visible');
        }
      }
    });
  });

  // Listen on the form's 'submit' handler...
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Trigger HTML5 validation UI on the form if any of the inputs fail
    // validation.
    var plainInputsValid = true;
    Array.prototype.forEach.call(form.querySelectorAll('input'), function(
      input
    ) {
      if (input.checkValidity && !input.checkValidity()) {
        plainInputsValid = false;
        return;
      }
    });
    if (!plainInputsValid) {
      triggerBrowserValidation();
      return;
    }

    // Show a loading screen...
    example.classList.add('submitting');

    // Disable all inputs.
    disableInputs();

    // Gather additional customer data we may have collected in our form.
    var name = form.querySelector('#' + exampleName + '-name');
    var address1 = form.querySelector('#' + exampleName + '-address');
    var city = form.querySelector('#' + exampleName + '-city');
    var state = form.querySelector('#' + exampleName + '-state');
    var zip = form.querySelector('#' + exampleName + '-zip');
    var _token = $('input[name="_token"]').val();
   
    var additionalData = {
      name: name ? name.value : undefined,
      address_line1: address1 ? address1.value : undefined,
      address_city: city ? city.value : undefined,
      address_state: state ? state.value : undefined,
      address_zip: zip ? zip.value : undefined,
    };

    // Use Stripe.js to create a token. We only need to pass in one Element
    // from the Element group in order to create a token. We can also pass
    // in the additional customer data we collected in our form.
    stripe.createToken(elements[0], additionalData).then(function(result) {
      // Stop loading!
      example.classList.remove('submitting');

      if (result.token) {
        // If we received a token, show the token ID.
        //example.classList.add('submitted');
       stripeTokenHandler(result.token.id, example);
    console.log('token-'+ _token); 
console.log(result.token.id);
      } else {
        // Otherwise, un-disable inputs.
        enableInputs();
      }
    });
    
  });

  resetButton.addEventListener('click', function(e) {
    e.preventDefault();
    // Resetting the form (instead of setting the value to `''` for each input)
    // helps us clear webkit autofill styles.
    form.reset();

    // Clear each Element.
    elements.forEach(function(element) {
      element.clear();
    });

    // Reset error state as well.
    error.classList.remove('visible');

    // Resetting the form does not un-disable inputs, so we need to do it separately:
    enableInputs();
    example.classList.remove('submitted');
  });
}

// Simple localization
const isStripeDev = window.location.hostname === 'stripe.dev';
const localeIndex = isStripeDev ? 2 : 1;
window.__exampleLocale = window.location.pathname.split('/')[localeIndex] || 'en';
const urlPrefix = isStripeDev ? '/elements-examples/' : '/';

document.querySelectorAll('.optionList a').forEach(function(langNode) {
  const langValue = langNode.getAttribute('data-lang');
  const langUrl = langValue === 'en' ? urlPrefix : (urlPrefix + langValue + '/');

  if (langUrl === window.location.pathname || langUrl === window.location.pathname + '/') {
    langNode.className += ' selected';
    langNode.parentNode.setAttribute('aria-selected', 'true');
  } else {
    langNode.setAttribute('href', langUrl);
    langNode.parentNode.setAttribute('aria-selected', 'false');
  }
});
(function() {
  "use strict";

  var elements = stripe.elements({
    // Stripe's examples are localized to specific languages, but if
    // you wish to have Elements automatically detect your user's locale,
    // use `locale: 'auto'` instead.
    locale: window.__exampleLocale
  });

  /**
   * Card Element
   */
  var card = elements.create("card", {
    iconStyle: "solid",
    style: {
      base: {
        iconColor: "#fff",
        color: "#fff",
        fontWeight: 400,
        fontFamily: "Helvetica Neue, Helvetica, Arial, sans-serif",
        fontSize: "16px",
        fontSmoothing: "antialiased",

        "::placeholder": {
          color: "#BFAEF6"
        },
        ":-webkit-autofill": {
          color: "#fce883"
        }
      },
      invalid: {
        iconColor: "#FFC7EE",
        color: "#FFC7EE"
      }
    }
  });
  card.mount("#example5-card");

  /**
   * Payment Request Element
   */
  var paymentRequest = stripe.paymentRequest({
    country: "US",
    currency: "usd",
    total: {
      amount: 2500,
      label: "Total"
    },
    requestShipping: true,
    shippingOptions: [
      {
        id: "free-shipping",
        label: "Free shipping",
        detail: "Arrives in 5 to 7 days",
        amount: 0
      }
    ]
  });
  paymentRequest.on("token", function(result) {

    console.log('token-');
colsole.log(result.token);

    var example = document.querySelector(".example5");
    example.querySelector(".token").innerText = result.token.id;
    // example.classList.add("submitted");
    // result.complete("success");
  });

  var paymentRequestElement = elements.create("paymentRequestButton", {
    paymentRequest: paymentRequest,
    style: {
      paymentRequestButton: {
        theme: "light"
      }
    }
  });

  paymentRequest.canMakePayment().then(function(result) {
    if (result) {
      document.querySelector(".example5 .card-only").style.display = "none";
      document.querySelector(
        ".example5 .payment-request-available"
      ).style.display =
        "block";
      paymentRequestElement.mount("#example5-paymentRequest");
    }
  });

  registerElements([card], "example5");
})();

// Send Stripe Token to Server
function stripeTokenHandler(token, example) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
// Add Stripe Token to hidden input
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token);
    form.appendChild(hiddenInput);
// Submit form
$.ajax({
            type: 'post',
            url: $("form#payment-form").attr("action"),
            data: $('form#payment-form').serialize(),
            success: function (data) {
              console.log(data);
              // example.querySelector('.token').innerText = token;
              // example.classList.add('submitted');
            }
          });

        //   $.post($("form").attr("action"), $('form').serialize(), function(data){
        //     // Display the returned data in browser
        //     console.log(data);
        // });

    // form.submit();
}
</script>
</script>
@endsection