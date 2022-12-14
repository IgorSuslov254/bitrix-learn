<?php
namespace Bitrix\MessageService\Providers;

interface OptionManager
{
	public function setOptions(array $options): self;
	public function setOption(string $optionName, $optionValue): self;
	public function getOptions(): array;
	public function getOption(string $optionName, $defaultValue = null);
	public function clearOptions(): self;
}