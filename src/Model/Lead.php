<?php

class Lead {
    private int $id;
    private string $name;
    private string $customer; // Stocké en string
    private string $employee; // Stocké en string
    private DateTime $createdAt;
    private string $phone;
    private string $status;

    public function __construct(
        int $id,
        string $name,
        string $customer, // Directement en string
        string $employee, // Directement en string
        DateTime $createdAt,
        string $phone,
        string $status
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->customer = $customer;
        $this->employee = $employee;
        $this->createdAt = $createdAt;
        $this->phone = $phone;
        $this->status = $status;
    }

    // Getters
    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getCustomer(): string { return $this->customer; } // Retourne une string
    public function getEmployee(): string { return $this->employee; } // Retourne une string
    public function getCreatedAt(): DateTime { return $this->createdAt; }
    public function getPhone(): string { return $this->phone; }
    public function getStatus(): string { return $this->status; }

    // Setters
    public function setName(string $name): void { $this->name = $name; }
    public function setCustomer(string $customer): void { $this->customer = $customer; } // Accepte une string
    public function setEmployee(string $employee): void { $this->employee = $employee; } // Accepte une string
    public function setCreatedAt(DateTime $createdAt): void { $this->createdAt = $createdAt; }
    public function setPhone(string $phone): void { $this->phone = $phone; }
    public function setStatus(string $status): void { $this->status = $status; }

    // Convert Lead object to array
    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'customer' => $this->customer, // Déjà une string
            'employe' => $this->employee, // Déjà une string
            'createdAt' => $this->createdAt->format('Y-m-d H:i:s'),
            'phone' => $this->phone,
            'status' => $this->status,
        ];
    }

    // Hydrate an object from an array
    public static function fromArray(array $data): self {
        return new self(
            $data['id'],
            $data['name'],
            $data['customer'], // Directement une string
            $data['employe'], // Directement une string
            new DateTime($data['createdAt']),
            $data['phone'],
            $data['status']
        );
    }
}
