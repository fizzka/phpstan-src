<?php declare(strict_types = 1);

namespace PHPStan\Rules\RuleErrors;

/**
 * @internal Use PHPStan\Rules\RuleErrorBuilder instead.
 */
class RuleError125 implements \PHPStan\Rules\RuleError, \PHPStan\Rules\FileRuleError, \PHPStan\Rules\TipRuleError, \PHPStan\Rules\IdentifierRuleError, \PHPStan\Rules\MetadataRuleError, \PHPStan\Rules\NonIgnorableRuleError
{

	public string $message;

	public string $file;

	public string $tip;

	public string $identifier;

	/** @var mixed[] */
	public array $metadata;

	public function getMessage(): string
	{
		return $this->message;
	}

	public function getFile(): string
	{
		return $this->file;
	}

	public function getTip(): string
	{
		return $this->tip;
	}

	public function getIdentifier(): string
	{
		return $this->identifier;
	}

	/**
	 * @return mixed[]
	 */
	public function getMetadata(): array
	{
		return $this->metadata;
	}

}
