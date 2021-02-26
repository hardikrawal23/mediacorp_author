<?php
namespace Drupal\mediacorp_author\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AgeCheckConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    foreach ($items as $item) {
      // Check if age is not lesser than 18
      if ($item->value < 18) {
        $this->context->addViolation($constraint->lesserThan);
      }

      // Check if age is not greater than 65
      if ($item->value > 65) {
        $this->context->addViolation($constraint->greaterThan);
      }
    }
  }

}